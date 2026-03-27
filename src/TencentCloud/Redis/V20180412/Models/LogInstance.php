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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getStatus() 获取<p>日志状态，create：创建中；normal：开启；close：关闭中。</p>
 * @method void setStatus(string $Status) 设置<p>日志状态，create：创建中；normal：开启；close：关闭中。</p>
 * @method string getEnableQuery() 获取<p>是否可以切换日志查询-取值：yes-可以，no-不可以。该参数主要为控制存量日志迁移到日志平台做查询使用，只有为yes状态才可以调用查询日志接口。</p>
 * @method void setEnableQuery(string $EnableQuery) 设置<p>是否可以切换日志查询-取值：yes-可以，no-不可以。该参数主要为控制存量日志迁移到日志平台做查询使用，只有为yes状态才可以调用查询日志接口。</p>
 * @method string getCreateAt() 获取<p>开启时间</p>
 * @method void setCreateAt(string $CreateAt) 设置<p>开启时间</p>
 * @method integer getHighLogExpireDay() 获取<p>高频存储天数</p>
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置<p>高频存储天数</p>
 * @method integer getLowLogExpireDay() 获取<p>低频存储天数</p>
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) 设置<p>低频存储天数</p>
 * @method integer getLogExpireDay() 获取<p>总存储时长</p>
 * @method void setLogExpireDay(integer $LogExpireDay) 设置<p>总存储时长</p>
 * @method float getHighStorage() 获取<p>高频存储量，单位：MB</p>
 * @method void setHighStorage(float $HighStorage) 设置<p>高频存储量，单位：MB</p>
 * @method float getLowStorage() 获取<p>低频存储量，单位：MB</p>
 * @method void setLowStorage(float $LowStorage) 设置<p>低频存储量，单位：MB</p>
 * @method float getLogStorage() 获取<p>总存储量</p>
 * @method void setLogStorage(float $LogStorage) 设置<p>总存储量</p>
 * @method string getDeliver() 获取<p>是否开启投递：ON，OFF</p>
 * @method void setDeliver(string $Deliver) 设置<p>是否开启投递：ON，OFF</p>
 * @method array getDeliverSummary() 获取<p>日志投递信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverSummary(array $DeliverSummary) 设置<p>日志投递信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceInfo getInstanceInfo() 获取<p>业务侧实例相关信息，根据业务不同，返回相关信息不同。</p>
 * @method void setInstanceInfo(InstanceInfo $InstanceInfo) 设置<p>业务侧实例相关信息，根据业务不同，返回相关信息不同。</p>
 * @method string getLogSubType() 获取<p>审计子类型</p>
 * @method void setLogSubType(string $LogSubType) 设置<p>审计子类型</p>
 */
class LogInstance extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志状态，create：创建中；normal：开启；close：关闭中。</p>
     */
    public $Status;

    /**
     * @var string <p>是否可以切换日志查询-取值：yes-可以，no-不可以。该参数主要为控制存量日志迁移到日志平台做查询使用，只有为yes状态才可以调用查询日志接口。</p>
     */
    public $EnableQuery;

    /**
     * @var string <p>开启时间</p>
     */
    public $CreateAt;

    /**
     * @var integer <p>高频存储天数</p>
     */
    public $HighLogExpireDay;

    /**
     * @var integer <p>低频存储天数</p>
     */
    public $LowLogExpireDay;

    /**
     * @var integer <p>总存储时长</p>
     */
    public $LogExpireDay;

    /**
     * @var float <p>高频存储量，单位：MB</p>
     */
    public $HighStorage;

    /**
     * @var float <p>低频存储量，单位：MB</p>
     */
    public $LowStorage;

    /**
     * @var float <p>总存储量</p>
     */
    public $LogStorage;

    /**
     * @var string <p>是否开启投递：ON，OFF</p>
     */
    public $Deliver;

    /**
     * @var array <p>日志投递信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverSummary;

    /**
     * @var InstanceInfo <p>业务侧实例相关信息，根据业务不同，返回相关信息不同。</p>
     */
    public $InstanceInfo;

    /**
     * @var string <p>审计子类型</p>
     */
    public $LogSubType;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Status <p>日志状态，create：创建中；normal：开启；close：关闭中。</p>
     * @param string $EnableQuery <p>是否可以切换日志查询-取值：yes-可以，no-不可以。该参数主要为控制存量日志迁移到日志平台做查询使用，只有为yes状态才可以调用查询日志接口。</p>
     * @param string $CreateAt <p>开启时间</p>
     * @param integer $HighLogExpireDay <p>高频存储天数</p>
     * @param integer $LowLogExpireDay <p>低频存储天数</p>
     * @param integer $LogExpireDay <p>总存储时长</p>
     * @param float $HighStorage <p>高频存储量，单位：MB</p>
     * @param float $LowStorage <p>低频存储量，单位：MB</p>
     * @param float $LogStorage <p>总存储量</p>
     * @param string $Deliver <p>是否开启投递：ON，OFF</p>
     * @param array $DeliverSummary <p>日志投递信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceInfo $InstanceInfo <p>业务侧实例相关信息，根据业务不同，返回相关信息不同。</p>
     * @param string $LogSubType <p>审计子类型</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnableQuery",$param) and $param["EnableQuery"] !== null) {
            $this->EnableQuery = $param["EnableQuery"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("LowLogExpireDay",$param) and $param["LowLogExpireDay"] !== null) {
            $this->LowLogExpireDay = $param["LowLogExpireDay"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighStorage",$param) and $param["HighStorage"] !== null) {
            $this->HighStorage = $param["HighStorage"];
        }

        if (array_key_exists("LowStorage",$param) and $param["LowStorage"] !== null) {
            $this->LowStorage = $param["LowStorage"];
        }

        if (array_key_exists("LogStorage",$param) and $param["LogStorage"] !== null) {
            $this->LogStorage = $param["LogStorage"];
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
            $this->InstanceInfo = new InstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("LogSubType",$param) and $param["LogSubType"] !== null) {
            $this->LogSubType = $param["LogSubType"];
        }
    }
}
