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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品详情
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getCategoryId() 获取产品分组模板ID
 * @method void setCategoryId(integer $CategoryId) 设置产品分组模板ID
 * @method string getEncryptionType() 获取加密类型。1表示证书认证，2表示密钥认证，21表示TID认证-SE方式，22表示TID认证-软加固方式
 * @method void setEncryptionType(string $EncryptionType) 设置加密类型。1表示证书认证，2表示密钥认证，21表示TID认证-SE方式，22表示TID认证-软加固方式
 * @method string getNetType() 获取连接类型。如：
wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh
 * @method void setNetType(string $NetType) 设置连接类型。如：
wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh
 * @method integer getDataProtocol() 获取数据协议 (1 使用物模型 2 为自定义类型)
 * @method void setDataProtocol(integer $DataProtocol) 设置数据协议 (1 使用物模型 2 为自定义类型)
 * @method string getProductDesc() 获取产品描述
 * @method void setProductDesc(string $ProductDesc) 设置产品描述
 * @method string getDevStatus() 获取状态 如：all 全部, dev 开发中, audit 审核中 released 已发布
 * @method void setDevStatus(string $DevStatus) 设置状态 如：all 全部, dev 开发中, audit 审核中 released 已发布
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method integer getProductType() 获取产品类型。如： 0 普通产品 ， 5 网关产品
 * @method void setProductType(integer $ProductType) 设置产品类型。如： 0 普通产品 ， 5 网关产品
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getModuleId() 获取产品ModuleId
 * @method void setModuleId(integer $ModuleId) 设置产品ModuleId
 * @method string getEnableProductScript() 获取是否使用脚本进行二进制转json功能 可以取值 true / false
 * @method void setEnableProductScript(string $EnableProductScript) 设置是否使用脚本进行二进制转json功能 可以取值 true / false
 * @method integer getCreateUserId() 获取创建人 UinId
 * @method void setCreateUserId(integer $CreateUserId) 设置创建人 UinId
 * @method string getCreatorNickName() 获取创建者昵称
 * @method void setCreatorNickName(string $CreatorNickName) 设置创建者昵称
 * @method integer getBindStrategy() 获取绑定策略（1：强踢；2：非强踢；0：表示无意义）
 * @method void setBindStrategy(integer $BindStrategy) 设置绑定策略（1：强踢；2：非强踢；0：表示无意义）
 * @method integer getDeviceCount() 获取设备数量
 * @method void setDeviceCount(integer $DeviceCount) 设置设备数量
 * @method string getRate() 获取平均传输速率
 * @method void setRate(string $Rate) 设置平均传输速率
 * @method string getPeriod() 获取有效期
 * @method void setPeriod(string $Period) 设置有效期
 * @method integer getIsInterconnection() 获取互联互通标识
 * @method void setIsInterconnection(integer $IsInterconnection) 设置互联互通标识
 */
class ProductEntry extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 产品分组模板ID
     */
    public $CategoryId;

    /**
     * @var string 加密类型。1表示证书认证，2表示密钥认证，21表示TID认证-SE方式，22表示TID认证-软加固方式
     */
    public $EncryptionType;

    /**
     * @var string 连接类型。如：
wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh
     */
    public $NetType;

    /**
     * @var integer 数据协议 (1 使用物模型 2 为自定义类型)
     */
    public $DataProtocol;

    /**
     * @var string 产品描述
     */
    public $ProductDesc;

    /**
     * @var string 状态 如：all 全部, dev 开发中, audit 审核中 released 已发布
     */
    public $DevStatus;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var integer 产品类型。如： 0 普通产品 ， 5 网关产品
     */
    public $ProductType;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 产品ModuleId
     */
    public $ModuleId;

    /**
     * @var string 是否使用脚本进行二进制转json功能 可以取值 true / false
     */
    public $EnableProductScript;

    /**
     * @var integer 创建人 UinId
     */
    public $CreateUserId;

    /**
     * @var string 创建者昵称
     */
    public $CreatorNickName;

    /**
     * @var integer 绑定策略（1：强踢；2：非强踢；0：表示无意义）
     */
    public $BindStrategy;

    /**
     * @var integer 设备数量
     */
    public $DeviceCount;

    /**
     * @var string 平均传输速率
     */
    public $Rate;

    /**
     * @var string 有效期
     */
    public $Period;

    /**
     * @var integer 互联互通标识
     */
    public $IsInterconnection;

    /**
     * @param string $ProductId 产品ID
     * @param string $ProductName 产品名称
     * @param integer $CategoryId 产品分组模板ID
     * @param string $EncryptionType 加密类型。1表示证书认证，2表示密钥认证，21表示TID认证-SE方式，22表示TID认证-软加固方式
     * @param string $NetType 连接类型。如：
wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh
     * @param integer $DataProtocol 数据协议 (1 使用物模型 2 为自定义类型)
     * @param string $ProductDesc 产品描述
     * @param string $DevStatus 状态 如：all 全部, dev 开发中, audit 审核中 released 已发布
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
     * @param string $Region 区域
     * @param integer $ProductType 产品类型。如： 0 普通产品 ， 5 网关产品
     * @param string $ProjectId 项目ID
     * @param integer $ModuleId 产品ModuleId
     * @param string $EnableProductScript 是否使用脚本进行二进制转json功能 可以取值 true / false
     * @param integer $CreateUserId 创建人 UinId
     * @param string $CreatorNickName 创建者昵称
     * @param integer $BindStrategy 绑定策略（1：强踢；2：非强踢；0：表示无意义）
     * @param integer $DeviceCount 设备数量
     * @param string $Rate 平均传输速率
     * @param string $Period 有效期
     * @param integer $IsInterconnection 互联互通标识
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("DataProtocol",$param) and $param["DataProtocol"] !== null) {
            $this->DataProtocol = $param["DataProtocol"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("DevStatus",$param) and $param["DevStatus"] !== null) {
            $this->DevStatus = $param["DevStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("EnableProductScript",$param) and $param["EnableProductScript"] !== null) {
            $this->EnableProductScript = $param["EnableProductScript"];
        }

        if (array_key_exists("CreateUserId",$param) and $param["CreateUserId"] !== null) {
            $this->CreateUserId = $param["CreateUserId"];
        }

        if (array_key_exists("CreatorNickName",$param) and $param["CreatorNickName"] !== null) {
            $this->CreatorNickName = $param["CreatorNickName"];
        }

        if (array_key_exists("BindStrategy",$param) and $param["BindStrategy"] !== null) {
            $this->BindStrategy = $param["BindStrategy"];
        }

        if (array_key_exists("DeviceCount",$param) and $param["DeviceCount"] !== null) {
            $this->DeviceCount = $param["DeviceCount"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("IsInterconnection",$param) and $param["IsInterconnection"] !== null) {
            $this->IsInterconnection = $param["IsInterconnection"];
        }
    }
}
