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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计实例信息
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getAuditStatus() 获取<p>开启状态</p><p>枚举值：</p><ul><li>OFF： 关闭</li><li>ON： 打开</li></ul>
 * @method void setAuditStatus(string $AuditStatus) 设置<p>开启状态</p><p>枚举值：</p><ul><li>OFF： 关闭</li><li>ON： 打开</li></ul>
 * @method integer getLogExpireDay() 获取<p>日志存储有效期</p><p>单位：天</p>
 * @method void setLogExpireDay(integer $LogExpireDay) 设置<p>日志存储有效期</p><p>单位：天</p>
 * @method integer getHotLogExpireDay() 获取<p>热存储有效期</p><p>单位：天</p>
 * @method void setHotLogExpireDay(integer $HotLogExpireDay) 设置<p>热存储有效期</p><p>单位：天</p>
 * @method integer getColdLogExpireDay() 获取<p>冷存储有效期</p><p>单位：天</p>
 * @method void setColdLogExpireDay(integer $ColdLogExpireDay) 设置<p>冷存储有效期</p><p>单位：天</p>
 * @method float getHotLogSize() 获取<p>热存储大小</p><p>单位：MB</p>
 * @method void setHotLogSize(float $HotLogSize) 设置<p>热存储大小</p><p>单位：MB</p>
 * @method float getColdLogSize() 获取<p>冷存储大小</p><p>单位：MB</p>
 * @method void setColdLogSize(float $ColdLogSize) 设置<p>冷存储大小</p><p>单位：MB</p>
 * @method string getCreateTime() 获取<p>开启时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>开启时间</p>
 * @method string getDeliver() 获取<p>投递状态</p>
 * @method void setDeliver(string $Deliver) 设置<p>投递状态</p>
 * @method array getDeliverSummary() 获取<p>投递信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverSummary(array $DeliverSummary) 设置<p>投递信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LogInstanceInfo getInstanceInfo() 获取<p>实例信息</p>
 * @method void setInstanceInfo(LogInstanceInfo $InstanceInfo) 设置<p>实例信息</p>
 */
class AuditInstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>开启状态</p><p>枚举值：</p><ul><li>OFF： 关闭</li><li>ON： 打开</li></ul>
     */
    public $AuditStatus;

    /**
     * @var integer <p>日志存储有效期</p><p>单位：天</p>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>热存储有效期</p><p>单位：天</p>
     */
    public $HotLogExpireDay;

    /**
     * @var integer <p>冷存储有效期</p><p>单位：天</p>
     */
    public $ColdLogExpireDay;

    /**
     * @var float <p>热存储大小</p><p>单位：MB</p>
     */
    public $HotLogSize;

    /**
     * @var float <p>冷存储大小</p><p>单位：MB</p>
     */
    public $ColdLogSize;

    /**
     * @var string <p>开启时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>投递状态</p>
     */
    public $Deliver;

    /**
     * @var array <p>投递信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverSummary;

    /**
     * @var LogInstanceInfo <p>实例信息</p>
     */
    public $InstanceInfo;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $AuditStatus <p>开启状态</p><p>枚举值：</p><ul><li>OFF： 关闭</li><li>ON： 打开</li></ul>
     * @param integer $LogExpireDay <p>日志存储有效期</p><p>单位：天</p>
     * @param integer $HotLogExpireDay <p>热存储有效期</p><p>单位：天</p>
     * @param integer $ColdLogExpireDay <p>冷存储有效期</p><p>单位：天</p>
     * @param float $HotLogSize <p>热存储大小</p><p>单位：MB</p>
     * @param float $ColdLogSize <p>冷存储大小</p><p>单位：MB</p>
     * @param string $CreateTime <p>开启时间</p>
     * @param string $Deliver <p>投递状态</p>
     * @param array $DeliverSummary <p>投递信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LogInstanceInfo $InstanceInfo <p>实例信息</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HotLogExpireDay",$param) and $param["HotLogExpireDay"] !== null) {
            $this->HotLogExpireDay = $param["HotLogExpireDay"];
        }

        if (array_key_exists("ColdLogExpireDay",$param) and $param["ColdLogExpireDay"] !== null) {
            $this->ColdLogExpireDay = $param["ColdLogExpireDay"];
        }

        if (array_key_exists("HotLogSize",$param) and $param["HotLogSize"] !== null) {
            $this->HotLogSize = $param["HotLogSize"];
        }

        if (array_key_exists("ColdLogSize",$param) and $param["ColdLogSize"] !== null) {
            $this->ColdLogSize = $param["ColdLogSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Deliver",$param) and $param["Deliver"] !== null) {
            $this->Deliver = $param["Deliver"];
        }

        if (array_key_exists("DeliverSummary",$param) and $param["DeliverSummary"] !== null) {
            $this->DeliverSummary = [];
            foreach ($param["DeliverSummary"] as $key => $value){
                $obj = new DeliverSummary();
                $obj->deserialize($value);
                array_push($this->DeliverSummary, $obj);
            }
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new LogInstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }
    }
}
