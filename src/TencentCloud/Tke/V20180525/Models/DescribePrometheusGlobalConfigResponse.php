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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusGlobalConfig返回参数结构体
 *
 * @method string getConfig() 获取配置内容
 * @method void setConfig(string $Config) 设置配置内容
 * @method array getServiceMonitors() 获取ServiceMonitors列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceMonitors(array $ServiceMonitors) 设置ServiceMonitors列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodMonitors() 获取PodMonitors列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodMonitors(array $PodMonitors) 设置PodMonitors列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRawJobs() 获取RawJobs列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawJobs(array $RawJobs) 设置RawJobs列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePrometheusGlobalConfigResponse extends AbstractModel
{
    /**
     * @var string 配置内容
     */
    public $Config;

    /**
     * @var array ServiceMonitors列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceMonitors;

    /**
     * @var array PodMonitors列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodMonitors;

    /**
     * @var array RawJobs列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawJobs;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Config 配置内容
     * @param array $ServiceMonitors ServiceMonitors列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodMonitors PodMonitors列表以及对应targets信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RawJobs RawJobs列表以及对应targets信息
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ServiceMonitors",$param) and $param["ServiceMonitors"] !== null) {
            $this->ServiceMonitors = [];
            foreach ($param["ServiceMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->ServiceMonitors, $obj);
            }
        }

        if (array_key_exists("PodMonitors",$param) and $param["PodMonitors"] !== null) {
            $this->PodMonitors = [];
            foreach ($param["PodMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->PodMonitors, $obj);
            }
        }

        if (array_key_exists("RawJobs",$param) and $param["RawJobs"] !== null) {
            $this->RawJobs = [];
            foreach ($param["RawJobs"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->RawJobs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
