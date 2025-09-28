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
 * CreateDBInstanceParamTpl请求参数结构体
 *
 * @method string getTplName() 获取参数模板名称。
 * @method void setTplName(string $TplName) 设置参数模板名称。
 * @method string getMongoVersion() 获取参数模板版本号。当**MirrorTplId**为空时，该字段必填。参数模板支持的售卖版本，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/35767) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
 * @method void setMongoVersion(string $MongoVersion) 设置参数模板版本号。当**MirrorTplId**为空时，该字段必填。参数模板支持的售卖版本，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/35767) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
 * @method string getClusterType() 获取实例类型。当 MirrorTplId 为空值时，该参数必填。
- REPLSET：副本集实例。
- SHARD：分片实例。
- STANDALONE：单节点实例。
 * @method void setClusterType(string $ClusterType) 设置实例类型。当 MirrorTplId 为空值时，该参数必填。
- REPLSET：副本集实例。
- SHARD：分片实例。
- STANDALONE：单节点实例。
 * @method string getTplDesc() 获取模板描述信息。
 * @method void setTplDesc(string $TplDesc) 设置模板描述信息。
 * @method array getParams() 获取模板参数，若不配置该参数，则以系统默认模板作为新版本参数。
 * @method void setParams(array $Params) 设置模板参数，若不配置该参数，则以系统默认模板作为新版本参数。
 * @method string getMirrorTplId() 获取镜像模板 ID。若指定镜像模板，则以该模板为镜像，克隆出一个新的模板。
**注意**：MirrorTplId 不为空值时，MongoVersion 及 ClusterType 将以 MirrorTpl 模板的版本及实例类型为准。
 * @method void setMirrorTplId(string $MirrorTplId) 设置镜像模板 ID。若指定镜像模板，则以该模板为镜像，克隆出一个新的模板。
**注意**：MirrorTplId 不为空值时，MongoVersion 及 ClusterType 将以 MirrorTpl 模板的版本及实例类型为准。
 */
class CreateDBInstanceParamTplRequest extends AbstractModel
{
    /**
     * @var string 参数模板名称。
     */
    public $TplName;

    /**
     * @var string 参数模板版本号。当**MirrorTplId**为空时，该字段必填。参数模板支持的售卖版本，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/35767) 获取。
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
     * @var string 实例类型。当 MirrorTplId 为空值时，该参数必填。
- REPLSET：副本集实例。
- SHARD：分片实例。
- STANDALONE：单节点实例。
     */
    public $ClusterType;

    /**
     * @var string 模板描述信息。
     */
    public $TplDesc;

    /**
     * @var array 模板参数，若不配置该参数，则以系统默认模板作为新版本参数。
     */
    public $Params;

    /**
     * @var string 镜像模板 ID。若指定镜像模板，则以该模板为镜像，克隆出一个新的模板。
**注意**：MirrorTplId 不为空值时，MongoVersion 及 ClusterType 将以 MirrorTpl 模板的版本及实例类型为准。
     */
    public $MirrorTplId;

    /**
     * @param string $TplName 参数模板名称。
     * @param string $MongoVersion 参数模板版本号。当**MirrorTplId**为空时，该字段必填。参数模板支持的售卖版本，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/35767) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
     * @param string $ClusterType 实例类型。当 MirrorTplId 为空值时，该参数必填。
- REPLSET：副本集实例。
- SHARD：分片实例。
- STANDALONE：单节点实例。
     * @param string $TplDesc 模板描述信息。
     * @param array $Params 模板参数，若不配置该参数，则以系统默认模板作为新版本参数。
     * @param string $MirrorTplId 镜像模板 ID。若指定镜像模板，则以该模板为镜像，克隆出一个新的模板。
**注意**：MirrorTplId 不为空值时，MongoVersion 及 ClusterType 将以 MirrorTpl 模板的版本及实例类型为准。
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
        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("TplDesc",$param) and $param["TplDesc"] !== null) {
            $this->TplDesc = $param["TplDesc"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ParamType();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("MirrorTplId",$param) and $param["MirrorTplId"] !== null) {
            $this->MirrorTplId = $param["MirrorTplId"];
        }
    }
}
