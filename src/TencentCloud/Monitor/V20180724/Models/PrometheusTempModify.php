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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生Prometheus模板可修改项
 *
 * @method string getName() 获取<p>修改名称</p>
 * @method void setName(string $Name) 设置<p>修改名称</p>
 * @method string getDescribe() 获取<p>修改描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribe(string $Describe) 设置<p>修改描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceMonitors() 获取<p>当Level为cluster时有效，<br>模板中的ServiceMonitor规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceMonitors(array $ServiceMonitors) 设置<p>当Level为cluster时有效，<br>模板中的ServiceMonitor规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodMonitors() 获取<p>当Level为cluster时有效，<br>模板中的PodMonitors规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodMonitors(array $PodMonitors) 设置<p>当Level为cluster时有效，<br>模板中的PodMonitors规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRawJobs() 获取<p>当Level为cluster时有效，<br>模板中的RawJobs规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawJobs(array $RawJobs) 设置<p>当Level为cluster时有效，<br>模板中的RawJobs规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecordRules() 获取<p>当Level为instance时有效，<br>模板中的聚合规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordRules(array $RecordRules) 设置<p>当Level为instance时有效，<br>模板中的聚合规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlertDetailRules() 获取<p>修改内容，只有当模板类型是Alert时生效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertDetailRules(array $AlertDetailRules) 设置<p>修改内容，只有当模板类型是Alert时生效</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusTempModify extends AbstractModel
{
    /**
     * @var string <p>修改名称</p>
     */
    public $Name;

    /**
     * @var string <p>修改描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Describe;

    /**
     * @var array <p>当Level为cluster时有效，<br>模板中的ServiceMonitor规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceMonitors;

    /**
     * @var array <p>当Level为cluster时有效，<br>模板中的PodMonitors规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodMonitors;

    /**
     * @var array <p>当Level为cluster时有效，<br>模板中的RawJobs规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawJobs;

    /**
     * @var array <p>当Level为instance时有效，<br>模板中的聚合规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordRules;

    /**
     * @var array <p>修改内容，只有当模板类型是Alert时生效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertDetailRules;

    /**
     * @param string $Name <p>修改名称</p>
     * @param string $Describe <p>修改描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceMonitors <p>当Level为cluster时有效，<br>模板中的ServiceMonitor规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodMonitors <p>当Level为cluster时有效，<br>模板中的PodMonitors规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RawJobs <p>当Level为cluster时有效，<br>模板中的RawJobs规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecordRules <p>当Level为instance时有效，<br>模板中的聚合规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlertDetailRules <p>修改内容，只有当模板类型是Alert时生效</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
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

        if (array_key_exists("RecordRules",$param) and $param["RecordRules"] !== null) {
            $this->RecordRules = [];
            foreach ($param["RecordRules"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->RecordRules, $obj);
            }
        }

        if (array_key_exists("AlertDetailRules",$param) and $param["AlertDetailRules"] !== null) {
            $this->AlertDetailRules = [];
            foreach ($param["AlertDetailRules"] as $key => $value){
                $obj = new PrometheusAlertPolicyItem();
                $obj->deserialize($value);
                array_push($this->AlertDetailRules, $obj);
            }
        }
    }
}
