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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStudioProduct请求参数结构体
 *
 * @method string getProductName() 获取<p>产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}</p>
 * @method void setProductName(string $ProductName) 设置<p>产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}</p>
 * @method integer getCategoryId() 获取<p>产品分组模板ID , ( 自定义模板填写1 , 控制台调用会使用预置的其他ID)</p>
 * @method void setCategoryId(integer $CategoryId) 设置<p>产品分组模板ID , ( 自定义模板填写1 , 控制台调用会使用预置的其他ID)</p>
 * @method integer getProductType() 获取<p>产品类型 填写 ( 0 普通产品 ， 5 网关产品)</p>
 * @method void setProductType(integer $ProductType) 设置<p>产品类型 填写 ( 0 普通产品 ， 5 网关产品)</p>
 * @method string getEncryptionType() 获取<p>设备认证方式 ，1表示证书认证，2表示密钥认证</p><p>枚举值：</p><ul><li>1： 证书认证(X.509证书认证)</li><li>2： 密钥认证</li></ul>
 * @method void setEncryptionType(string $EncryptionType) 设置<p>设备认证方式 ，1表示证书认证，2表示密钥认证</p><p>枚举值：</p><ul><li>1： 证书认证(X.509证书认证)</li><li>2： 密钥认证</li></ul>
 * @method string getNetType() 获取<p>连接类型 可以填写 wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh</p>
 * @method void setNetType(string $NetType) 设置<p>连接类型 可以填写 wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh</p>
 * @method integer getDataProtocol() 获取<p>数据协议 (1 使用物模型，即使用腾讯云物联网开发平台制定的物模型协议 2 自定义透传，即用户自由定义MQTT协议Payload部分)</p>
 * @method void setDataProtocol(integer $DataProtocol) 设置<p>数据协议 (1 使用物模型，即使用腾讯云物联网开发平台制定的物模型协议 2 自定义透传，即用户自由定义MQTT协议Payload部分)</p>
 * @method string getProductDesc() 获取<p>产品描述</p>
 * @method void setProductDesc(string $ProductDesc) 设置<p>产品描述</p>
 * @method string getProjectId() 获取<p>产品所在的项目ID，可从产品管理页的当前URL中获取project_id的值</p>
 * @method void setProjectId(string $ProjectId) 设置<p>产品所在的项目ID，可从产品管理页的当前URL中获取project_id的值</p>
 * @method string getRate() 获取<p>平均传输速率</p>
 * @method void setRate(string $Rate) 设置<p>平均传输速率</p>
 * @method string getPeriod() 获取<p>期限</p>
 * @method void setPeriod(string $Period) 设置<p>期限</p>
 * @method string getPrivateCAName() 获取<p>第三方CA证书名称。空/不传 = 腾讯云默认CA证书；非空 = 使用该证书（须为当前账号已上传的 CA，不存在会报错）</p>
 * @method void setPrivateCAName(string $PrivateCAName) 设置<p>第三方CA证书名称。空/不传 = 腾讯云默认CA证书；非空 = 使用该证书（须为当前账号已上传的 CA，不存在会报错）</p>
 */
class CreateStudioProductRequest extends AbstractModel
{
    /**
     * @var string <p>产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}</p>
     */
    public $ProductName;

    /**
     * @var integer <p>产品分组模板ID , ( 自定义模板填写1 , 控制台调用会使用预置的其他ID)</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>产品类型 填写 ( 0 普通产品 ， 5 网关产品)</p>
     */
    public $ProductType;

    /**
     * @var string <p>设备认证方式 ，1表示证书认证，2表示密钥认证</p><p>枚举值：</p><ul><li>1： 证书认证(X.509证书认证)</li><li>2： 密钥认证</li></ul>
     */
    public $EncryptionType;

    /**
     * @var string <p>连接类型 可以填写 wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh</p>
     */
    public $NetType;

    /**
     * @var integer <p>数据协议 (1 使用物模型，即使用腾讯云物联网开发平台制定的物模型协议 2 自定义透传，即用户自由定义MQTT协议Payload部分)</p>
     */
    public $DataProtocol;

    /**
     * @var string <p>产品描述</p>
     */
    public $ProductDesc;

    /**
     * @var string <p>产品所在的项目ID，可从产品管理页的当前URL中获取project_id的值</p>
     */
    public $ProjectId;

    /**
     * @var string <p>平均传输速率</p>
     */
    public $Rate;

    /**
     * @var string <p>期限</p>
     */
    public $Period;

    /**
     * @var string <p>第三方CA证书名称。空/不传 = 腾讯云默认CA证书；非空 = 使用该证书（须为当前账号已上传的 CA，不存在会报错）</p>
     */
    public $PrivateCAName;

    /**
     * @param string $ProductName <p>产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}</p>
     * @param integer $CategoryId <p>产品分组模板ID , ( 自定义模板填写1 , 控制台调用会使用预置的其他ID)</p>
     * @param integer $ProductType <p>产品类型 填写 ( 0 普通产品 ， 5 网关产品)</p>
     * @param string $EncryptionType <p>设备认证方式 ，1表示证书认证，2表示密钥认证</p><p>枚举值：</p><ul><li>1： 证书认证(X.509证书认证)</li><li>2： 密钥认证</li></ul>
     * @param string $NetType <p>连接类型 可以填写 wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh</p>
     * @param integer $DataProtocol <p>数据协议 (1 使用物模型，即使用腾讯云物联网开发平台制定的物模型协议 2 自定义透传，即用户自由定义MQTT协议Payload部分)</p>
     * @param string $ProductDesc <p>产品描述</p>
     * @param string $ProjectId <p>产品所在的项目ID，可从产品管理页的当前URL中获取project_id的值</p>
     * @param string $Rate <p>平均传输速率</p>
     * @param string $Period <p>期限</p>
     * @param string $PrivateCAName <p>第三方CA证书名称。空/不传 = 腾讯云默认CA证书；非空 = 使用该证书（须为当前账号已上传的 CA，不存在会报错）</p>
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("PrivateCAName",$param) and $param["PrivateCAName"] !== null) {
            $this->PrivateCAName = $param["PrivateCAName"];
        }
    }
}
