<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudRunServerDetail返回参数结构体
 *
 * @method ServerBaseInfo getBaseInfo() 获取服务基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseInfo(ServerBaseInfo $BaseInfo) 设置服务基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServerBaseConfig getServerConfig() 获取服务配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerConfig(ServerBaseConfig $ServerConfig) 设置服务配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOnlineVersionInfos() 获取在线版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnlineVersionInfos(array $OnlineVersionInfos) 设置在线版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudRunServerDetailResponse extends AbstractModel
{
    /**
     * @var ServerBaseInfo 服务基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseInfo;

    /**
     * @var ServerBaseConfig 服务配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerConfig;

    /**
     * @var array 在线版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnlineVersionInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ServerBaseInfo $BaseInfo 服务基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServerBaseConfig $ServerConfig 服务配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OnlineVersionInfos 在线版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BaseInfo",$param) and $param["BaseInfo"] !== null) {
            $this->BaseInfo = new ServerBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("ServerConfig",$param) and $param["ServerConfig"] !== null) {
            $this->ServerConfig = new ServerBaseConfig();
            $this->ServerConfig->deserialize($param["ServerConfig"]);
        }

        if (array_key_exists("OnlineVersionInfos",$param) and $param["OnlineVersionInfos"] !== null) {
            $this->OnlineVersionInfos = [];
            foreach ($param["OnlineVersionInfos"] as $key => $value){
                $obj = new OnlineVersionInfo();
                $obj->deserialize($value);
                array_push($this->OnlineVersionInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
