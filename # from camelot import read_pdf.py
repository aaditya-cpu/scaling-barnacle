
import pandas as pd
import requests
import time
from json import loads
from pandas.io.json import json_normalize

df = pd.DataFrame()
lel = []
st = time.time()
for i in range(1, 100):
    url = f"https://schoolsbookonline.com/wp-json/wc/v3/orders?status=completed&page={i}&&per_page=100"
    payload = {}
    headers = {
        'Authorization':
        'Basic Y2tfNWQ1MjU0MjAxNmJlNTJmMTU2NTc1M2NkMTJlYTE2ZjE2OWExZWI4Nzpjc18xNjFjNDFhYjQ4YzAzNjU2OWU0Mzk5OWQ5OTBiZGU0ODc4NjE1MGNl',
        'Cookie':
        'wfwaf-authcookie-c7d8d8a291508289cb73487818cae234=14%7Cadministrator%7Cmanage_options%2Cunfiltered_html%2Cedit_others_posts%2Cupload_files%2Cpublish_posts%2Cedit_posts%2Cread%2Cmanage_network%7Cc6bf6711699482598084d1d3cec1bfc00c0660c9bb2b8b78abe8055d0398c3fd'
    }
    response = requests.get(url=url, headers=headers)
    # print(type(response.text))
    dic = json_normalize(loads(response.text))
    # print(type(dic))
    # print(dic)
    df1 = pd.DataFrame.from_dict(dic)
    #     df= df.append(df1)
    df = pd.concat([df, df1])
    df.dropna(axis=1, how='all', inplace=True)
    df.drop([
        'parent_id', 'status', 'currency', 'version', 'prices_include_tax',
        'date_created', 'date_modified', 'discount_total', 'discount_tax',
        'shipping_total', 'shipping_tax', 'cart_tax', 'total', 'total',
        'total_tax', 'customer_id', 'payment_method', 'payment_method_title',
        'customer_ip_address', 'customer_user_agent', 'created_via',
        'customer_note', 'cart_hash', 'tax_lines', 'shipping_lines',
        'fee_lines', 'coupon_lines', 'refunds', 'currency_symbol',
        'shipping.first_name', 'shipping.last_name', 'shipping.company',
        'shipping.address_1', 'shipping.address_2', 'shipping.city',
        'shipping.state', 'shipping.postcode', 'shipping.country',
        'shipping.phone'
    ],
            axis=1,
            inplace=True)
    # df.to_csv('GfG.csv', index = False)
met_order_data = df['line_items']
print(met_order_data.size)
df2 = pd.DataFrame()
for i in range(0, met_order_data.size):
    dic1 = json_normalize(met_order_data[i])
    df3 = pd.DataFrame.from_records(dic1)
    # df3 = df3.join(df["id"][i])
    df3["Order ID"] = df["id"].iloc[i]
    df3["date_paid_gmt"] = df["date_paid_gmt"].iloc[i]
    df3["billing.first_name"] = df["billing.first_name"].iloc[i]
    df3["billing.last_name"] = df["billing.last_name"].iloc[i]
    df3["billing.company"] = df["billing.company"].iloc[i]
    df3["billing.address_1"] = df["billing.address_1"].iloc[i]
    df3["billing.address_2"] = df["billing.address_2"].iloc[i]
    df3["billing.city"] = df["billing.city"].iloc[i]
    df3["billing.state"] = df["billing.state"].iloc[i]
    df3["billing.postcode"] = df["billing.postcode"].iloc[i]
    df3["billing.country"] = df["billing.country"].iloc[i]
    df3["billing.email"] = df["billing.email"].iloc[i]
    df3["billing.phone"] = df["billing.phone"].iloc[i]

    df2 = pd.concat([df2, df3])

# print(df2)
# df2.drop(['variation_id','tax_class','subtotal','subtotal_tax','total','total_tax','taxes','parent_name'])
pdfnew = df2[df2['price'].eq(0)]
# newdf= df2.drop(df2[df2['price'].ne(0)].index)

# kitname = df2[ df2['price'] > 0 ].index
# def filter_rows_by_values(df, col, values):
#     return df[df[col].isin(values)]
# df2 = filter_rows_by_values(df2, "price", ["0"])
# remove rows by filtering
# Get names of indexes for which column Age has value 30
# indexNames = df2[df2['total']== 0]
# Delete these row indexes from dataFrame
# df2.drop(indexNames , inplace=True)
pdfnew.to_csv('newdfetadata.csv', index=False)
# df.drop(kitname, inplace = True)
et = time.time()
elapsed_time = et - st
print(f"elapsed time: {elapsed_time} seconds")