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
 * 告警通知内容模板支持的变量或者函数列表
 *
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 * @method array getVariables() 获取支持的变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVariables(array $Variables) 设置支持的变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFunctions() 获取支持的函数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunctions(array $Functions) 设置支持的函数
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotificationContentTemplateSupport extends AbstractModel
{
    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @var array 支持的变量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Variables;

    /**
     * @var array 支持的函数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Functions;

    /**
     * @param string $MonitorType 监控类型
     * @param array $Variables 支持的变量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Functions 支持的函数
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
        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new NotificationContentTemplateSupportDetail();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = [];
            foreach ($param["Functions"] as $key => $value){
                $obj = new NotificationContentTemplateSupportDetail();
                $obj->deserialize($value);
                array_push($this->Functions, $obj);
            }
        }
    }
}
