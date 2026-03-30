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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志实例
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getStatus() 获取日志状态，create：创建中；normal：开启；close：关闭中。
 * @method void setStatus(string $Status) 设置日志状态，create：创建中；normal：开启；close：关闭中。
 * @method string getEnableQuery() 获取	
是否可以切换日志查询-取值：yes-可以，no-不可以。该参数主要为控制存量日志迁移到日志平台做查询使用，只有为yes状态才可以调用查询日志接口。
 * @method void setEnableQuery(string $EnableQuery) 设置	
是否可以切换日志查询-取值：yes-可以，no-不可以。该参数主要为控制存量日志迁移到日志平台做查询使用，只有为yes状态才可以调用查询日志接口。
 * @method string getCreateAt() 获取开启时间
 * @method void setCreateAt(string $CreateAt) 设置开启时间
 * @method integer getHighLogExpireDay() 获取高频存储天数
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置高频存储天数
 * @method integer getLowLogExpireDay() 获取低频存储天数
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) 设置低频存储天数
 * @method integer getLogExpireDay() 获取总存储时长
 * @method void setLogExpireDay(integer $LogExpireDay) 设置总存储时长
 * @method float getHighStorage() 获取高频存储量，单位：MB
 * @method void setHighStorage(float $HighStorage) 设置高频存储量，单位：MB
 * @method float getLowStorage() 获取低频存储量，单位：MB
 * @method void setLowStorage(float $LowStorage) 设置低频存储量，单位：MB
 * @method float getLogStorage() 获取总存储量
 * @method void setLogStorage(float $LogStorage) 设置总存储量
 * @method string getDeliver() 获取是否开启投递：ON，OFF
 * @method void setDeliver(string $Deliver) 设置是否开启投递：ON，OFF
 * @method array getDeliverSummary() 获取日志投递信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverSummary(array $DeliverSummary) 设置日志投递信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceInfo getInstanceInfo() 获取业务侧实例相关信息，根据业务不同，返回相关信息不同。
 * @method void setInstanceInfo(InstanceInfo $InstanceInfo) 设置业务侧实例相关信息，根据业务不同，返回相关信息不同。
 */
class LogInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 日志状态，create：创建中；normal：开启；close：关闭中。
     */
    public $Status;

    /**
     * @var string 	
是否可以切换日志查询-取值：yes-可以，no-不可以。该参数主要为控制存量日志迁移到日志平台做查询使用，只有为yes状态才可以调用查询日志接口。
     */
    public $EnableQuery;

    /**
     * @var string 开启时间
     */
    public $CreateAt;

    /**
     * @var integer 高频存储天数
     */
    public $HighLogExpireDay;

    /**
     * @var integer 低频存储天数
     */
    public $LowLogExpireDay;

    /**
     * @var integer 总存储时长
     */
    public $LogExpireDay;

    /**
     * @var float 高频存储量，单位：MB
     */
    public $HighStorage;

    /**
     * @var float 低频存储量，单位：MB
     */
    public $LowStorage;

    /**
     * @var float 总存储量
     */
    public $LogStorage;

    /**
     * @var string 是否开启投递：ON，OFF
     */
    public $Deliver;

    /**
     * @var array 日志投递信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverSummary;

    /**
     * @var InstanceInfo 业务侧实例相关信息，根据业务不同，返回相关信息不同。
     */
    public $InstanceInfo;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Status 日志状态，create：创建中；normal：开启；close：关闭中。
     * @param string $EnableQuery 	
是否可以切换日志查询-取值：yes-可以，no-不可以。该参数主要为控制存量日志迁移到日志平台做查询使用，只有为yes状态才可以调用查询日志接口。
     * @param string $CreateAt 开启时间
     * @param integer $HighLogExpireDay 高频存储天数
     * @param integer $LowLogExpireDay 低频存储天数
     * @param integer $LogExpireDay 总存储时长
     * @param float $HighStorage 高频存储量，单位：MB
     * @param float $LowStorage 低频存储量，单位：MB
     * @param float $LogStorage 总存储量
     * @param string $Deliver 是否开启投递：ON，OFF
     * @param array $DeliverSummary 日志投递信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceInfo $InstanceInfo 业务侧实例相关信息，根据业务不同，返回相关信息不同。
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
    }
}
