<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceParamTpl请求参数结构体
 *
 * @method array getTplIds() 获取参数模板 ID。请通过接口 [DescribeDBInstanceParamTpl](https://cloud.tencent.com/document/product/240/109155) 获取模板 ID。
 * @method void setTplIds(array $TplIds) 设置参数模板 ID。请通过接口 [DescribeDBInstanceParamTpl](https://cloud.tencent.com/document/product/240/109155) 获取模板 ID。
 * @method array getTplNames() 获取指定查询的模板名称。
 * @method void setTplNames(array $TplNames) 设置指定查询的模板名称。
 * @method array getMongoVersion() 获取指定所需查询的参数模板的数据库版本号。具体支持的版本信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
 * @method void setMongoVersion(array $MongoVersion) 设置指定所需查询的参数模板的数据库版本号。具体支持的版本信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
 * @method string getTplType() 获取指定查询的模板类型。
- DEFAULT：系统默认模板。
- CUSTOMIZE：自定义模板。
 * @method void setTplType(string $TplType) 设置指定查询的模板类型。
- DEFAULT：系统默认模板。
- CUSTOMIZE：自定义模板。
 */
class DescribeDBInstanceParamTplRequest extends AbstractModel
{
    /**
     * @var array 参数模板 ID。请通过接口 [DescribeDBInstanceParamTpl](https://cloud.tencent.com/document/product/240/109155) 获取模板 ID。
     */
    public $TplIds;

    /**
     * @var array 指定查询的模板名称。
     */
    public $TplNames;

    /**
     * @var array 指定所需查询的参数模板的数据库版本号。具体支持的版本信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
     */
    public $MongoVersion;

    /**
     * @var string 指定查询的模板类型。
- DEFAULT：系统默认模板。
- CUSTOMIZE：自定义模板。
     */
    public $TplType;

    /**
     * @param array $TplIds 参数模板 ID。请通过接口 [DescribeDBInstanceParamTpl](https://cloud.tencent.com/document/product/240/109155) 获取模板 ID。
     * @param array $TplNames 指定查询的模板名称。
     * @param array $MongoVersion 指定所需查询的参数模板的数据库版本号。具体支持的版本信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
     * @param string $TplType 指定查询的模板类型。
- DEFAULT：系统默认模板。
- CUSTOMIZE：自定义模板。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TplIds",$param) and $param["TplIds"] !== null) {
            $this->TplIds = $param["TplIds"];
        }

        if (array_key_exists("TplNames",$param) and $param["TplNames"] !== null) {
            $this->TplNames = $param["TplNames"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("TplType",$param) and $param["TplType"] !== null) {
            $this->TplType = $param["TplType"];
        }
    }
}
