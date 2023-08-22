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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知规则
 *
 * @method array getNoticeReceivers() 获取告警通知模板接收者信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置告警通知模板接收者信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWebCallbacks() 获取告警通知模板回调信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebCallbacks(array $WebCallbacks) 设置告警通知模板回调信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRule() 获取匹配规则。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRule(string $Rule) 设置匹配规则。
注意：此字段可能返回 null，表示取不到有效值。
 */
class NoticeRule extends AbstractModel
{
    /**
     * @var array 告警通知模板接收者信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeReceivers;

    /**
     * @var array 告警通知模板回调信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebCallbacks;

    /**
     * @var string 匹配规则。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rule;

    /**
     * @param array $NoticeReceivers 告警通知模板接收者信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WebCallbacks 告警通知模板回调信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Rule 匹配规则。
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
        if (array_key_exists("NoticeReceivers",$param) and $param["NoticeReceivers"] !== null) {
            $this->NoticeReceivers = [];
            foreach ($param["NoticeReceivers"] as $key => $value){
                $obj = new NoticeReceiver();
                $obj->deserialize($value);
                array_push($this->NoticeReceivers, $obj);
            }
        }

        if (array_key_exists("WebCallbacks",$param) and $param["WebCallbacks"] !== null) {
            $this->WebCallbacks = [];
            foreach ($param["WebCallbacks"] as $key => $value){
                $obj = new WebCallback();
                $obj->deserialize($value);
                array_push($this->WebCallbacks, $obj);
            }
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }
    }
}
