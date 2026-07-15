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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentConfigs返回参数结构体
 *
 * @method array getLogConfigs() 获取采集配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConfigs(array $LogConfigs) 设置采集配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceLogConfigs() 获取服务日志的配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceLogConfigs(array $ServiceLogConfigs) 设置服务日志的配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastVersion() 获取弃用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastVersion(string $LastVersion) 设置弃用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNeedUpdate() 获取弃用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedUpdate(boolean $NeedUpdate) 设置弃用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getURL() 获取弃用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURL(string $URL) 设置弃用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMd5() 获取弃用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMd5(string $FileMd5) 设置弃用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentConfigsResponse extends AbstractModel
{
    /**
     * @var array 采集配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConfigs;

    /**
     * @var array 服务日志的配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceLogConfigs;

    /**
     * @var string 弃用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastVersion;

    /**
     * @var boolean 弃用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeedUpdate;

    /**
     * @var string 弃用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URL;

    /**
     * @var string 弃用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMd5;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LogConfigs 采集配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceLogConfigs 服务日志的配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastVersion 弃用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NeedUpdate 弃用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $URL 弃用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMd5 弃用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LogConfigs",$param) and $param["LogConfigs"] !== null) {
            $this->LogConfigs = [];
            foreach ($param["LogConfigs"] as $key => $value){
                $obj = new LogConfigInfo();
                $obj->deserialize($value);
                array_push($this->LogConfigs, $obj);
            }
        }

        if (array_key_exists("ServiceLogConfigs",$param) and $param["ServiceLogConfigs"] !== null) {
            $this->ServiceLogConfigs = [];
            foreach ($param["ServiceLogConfigs"] as $key => $value){
                $obj = new ServiceLogConfigInfo();
                $obj->deserialize($value);
                array_push($this->ServiceLogConfigs, $obj);
            }
        }

        if (array_key_exists("LastVersion",$param) and $param["LastVersion"] !== null) {
            $this->LastVersion = $param["LastVersion"];
        }

        if (array_key_exists("NeedUpdate",$param) and $param["NeedUpdate"] !== null) {
            $this->NeedUpdate = $param["NeedUpdate"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
