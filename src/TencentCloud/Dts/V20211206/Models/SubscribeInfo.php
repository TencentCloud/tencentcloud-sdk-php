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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订阅实例信息
 *
 * @method string getSubscribeId() 获取数据订阅的实例ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅的实例ID
 * @method string getSubscribeName() 获取数据订阅实例的名称
 * @method void setSubscribeName(string $SubscribeName) 设置数据订阅实例的名称
 * @method string getTopic() 获取订阅实例发送数据的kafka topic
 * @method void setTopic(string $Topic) 设置订阅实例发送数据的kafka topic
 * @method string getProduct() 获取订阅实例的类型，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)
 * @method void setProduct(string $Product) 设置订阅实例的类型，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)
 * @method string getInstanceId() 获取订阅的数据库实例ID（如果订阅的是云数据库）如果实例不是腾讯云上的，此值为空。
 * @method void setInstanceId(string $InstanceId) 设置订阅的数据库实例ID（如果订阅的是云数据库）如果实例不是腾讯云上的，此值为空。
 * @method string getInstanceStatus() 获取云数据库状态：running 运行中，isolated 已隔离，offline 已下线。如果不是云上，此值为空
 * @method void setInstanceStatus(string $InstanceStatus) 设置云数据库状态：running 运行中，isolated 已隔离，offline 已下线。如果不是云上，此值为空
 * @method string getStatus() 获取数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining, 按量转包年包月中 post2PrePayIng
 * @method void setStatus(string $Status) 设置数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining, 按量转包年包月中 post2PrePayIng
 * @method string getSubsStatus() 获取数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error
 * @method void setSubsStatus(string $SubsStatus) 设置数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error
 * @method string getModifyTime() 获取上次修改时间，时间格式如：Y-m-d h:m:s
 * @method void setModifyTime(string $ModifyTime) 设置上次修改时间，时间格式如：Y-m-d h:m:s
 * @method string getCreateTime() 获取创建时间，时间格式如：Y-m-d h:m:s
 * @method void setCreateTime(string $CreateTime) 设置创建时间，时间格式如：Y-m-d h:m:s
 * @method string getIsolateTime() 获取隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
 * @method string getExpireTime() 获取包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
 * @method void setExpireTime(string $ExpireTime) 设置包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
 * @method string getOfflineTime() 获取下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
 * @method void setOfflineTime(string $OfflineTime) 设置下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
 * @method integer getPayType() 获取计费方式，0 - 包年包月，1 - 按量计费
 * @method void setPayType(integer $PayType) 设置计费方式，0 - 包年包月，1 - 按量计费
 * @method integer getAutoRenewFlag() 获取自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费
 * @method string getRegion() 获取数据订阅实例所属地域
 * @method void setRegion(string $Region) 设置数据订阅实例所属地域
 * @method string getAccessType() 获取接入方式。枚举值：extranet(公网) vpncloud(vpn接入) dcg(专线接入) ccn(云联网) cdb(云数据库) cvm(云主机自建) intranet(自研上云) vpc(私有网络vpc)
 * @method void setAccessType(string $AccessType) 设置接入方式。枚举值：extranet(公网) vpncloud(vpn接入) dcg(专线接入) ccn(云联网) cdb(云数据库) cvm(云主机自建) intranet(自研上云) vpc(私有网络vpc)
 * @method array getEndpoints() 获取数据库节点信息
 * @method void setEndpoints(array $Endpoints) 设置数据库节点信息
 * @method string getSubscribeVersion() 获取数据订阅版本, 当前只支持 kafka 版本。
 * @method void setSubscribeVersion(string $SubscribeVersion) 设置数据订阅版本, 当前只支持 kafka 版本。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrors() 获取任务报错信息，如果有的话。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrors(array $Errors) 设置任务报错信息，如果有的话。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubscribeInfo extends AbstractModel
{
    /**
     * @var string 数据订阅的实例ID
     */
    public $SubscribeId;

    /**
     * @var string 数据订阅实例的名称
     */
    public $SubscribeName;

    /**
     * @var string 订阅实例发送数据的kafka topic
     */
    public $Topic;

    /**
     * @var string 订阅实例的类型，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)
     */
    public $Product;

    /**
     * @var string 订阅的数据库实例ID（如果订阅的是云数据库）如果实例不是腾讯云上的，此值为空。
     */
    public $InstanceId;

    /**
     * @var string 云数据库状态：running 运行中，isolated 已隔离，offline 已下线。如果不是云上，此值为空
     */
    public $InstanceStatus;

    /**
     * @var string 数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining, 按量转包年包月中 post2PrePayIng
     */
    public $Status;

    /**
     * @var string 数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error
     */
    public $SubsStatus;

    /**
     * @var string 上次修改时间，时间格式如：Y-m-d h:m:s
     */
    public $ModifyTime;

    /**
     * @var string 创建时间，时间格式如：Y-m-d h:m:s
     */
    public $CreateTime;

    /**
     * @var string 隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
     */
    public $IsolateTime;

    /**
     * @var string 包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
     */
    public $ExpireTime;

    /**
     * @var string 下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
     */
    public $OfflineTime;

    /**
     * @var integer 计费方式，0 - 包年包月，1 - 按量计费
     */
    public $PayType;

    /**
     * @var integer 自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 数据订阅实例所属地域
     */
    public $Region;

    /**
     * @var string 接入方式。枚举值：extranet(公网) vpncloud(vpn接入) dcg(专线接入) ccn(云联网) cdb(云数据库) cvm(云主机自建) intranet(自研上云) vpc(私有网络vpc)
     */
    public $AccessType;

    /**
     * @var array 数据库节点信息
     */
    public $Endpoints;

    /**
     * @var string 数据订阅版本, 当前只支持 kafka 版本。
     */
    public $SubscribeVersion;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 任务报错信息，如果有的话。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errors;

    /**
     * @param string $SubscribeId 数据订阅的实例ID
     * @param string $SubscribeName 数据订阅实例的名称
     * @param string $Topic 订阅实例发送数据的kafka topic
     * @param string $Product 订阅实例的类型，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)
     * @param string $InstanceId 订阅的数据库实例ID（如果订阅的是云数据库）如果实例不是腾讯云上的，此值为空。
     * @param string $InstanceStatus 云数据库状态：running 运行中，isolated 已隔离，offline 已下线。如果不是云上，此值为空
     * @param string $Status 数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining, 按量转包年包月中 post2PrePayIng
     * @param string $SubsStatus 数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error
     * @param string $ModifyTime 上次修改时间，时间格式如：Y-m-d h:m:s
     * @param string $CreateTime 创建时间，时间格式如：Y-m-d h:m:s
     * @param string $IsolateTime 隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
     * @param string $ExpireTime 包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
     * @param string $OfflineTime 下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
     * @param integer $PayType 计费方式，0 - 包年包月，1 - 按量计费
     * @param integer $AutoRenewFlag 自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费
     * @param string $Region 数据订阅实例所属地域
     * @param string $AccessType 接入方式。枚举值：extranet(公网) vpncloud(vpn接入) dcg(专线接入) ccn(云联网) cdb(云数据库) cvm(云主机自建) intranet(自研上云) vpc(私有网络vpc)
     * @param array $Endpoints 数据库节点信息
     * @param string $SubscribeVersion 数据订阅版本, 当前只支持 kafka 版本。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Errors 任务报错信息，如果有的话。
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubsStatus",$param) and $param["SubsStatus"] !== null) {
            $this->SubsStatus = $param["SubsStatus"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new EndpointItem();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }

        if (array_key_exists("SubscribeVersion",$param) and $param["SubscribeVersion"] !== null) {
            $this->SubscribeVersion = $param["SubscribeVersion"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SubsErr();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }
    }
}
