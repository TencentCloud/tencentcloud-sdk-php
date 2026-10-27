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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略详细信息
 *
 * @method string getPolicyId() 获取<p>策略id</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>策略id</p>
 * @method string getPolicyName() 获取<p>策略名称</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>策略名称</p>
 * @method string getDescription() 获取<p>策略描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserIds() 获取<p>策略作用用户id列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserIds(array $UserIds) 设置<p>策略作用用户id列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>策略的租户uin</p>
 * @method void setUin(string $Uin) 设置<p>策略的租户uin</p>
 * @method integer getFilePolicyId() 获取<p>文件重定向策略id。取值范围：<br>1：读写<br>2：只读<br>3：禁止读写</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePolicyId(integer $FilePolicyId) 设置<p>文件重定向策略id。取值范围：<br>1：读写<br>2：只读<br>3：禁止读写</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClipPolicyId() 获取<p>剪切板重定向策略id。取值范围：<br>1：开启云桌面到客户端<br>2：开启客户端到云桌面<br>3：双向开启<br>4：禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClipPolicyId(integer $ClipPolicyId) 设置<p>剪切板重定向策略id。取值范围：<br>1：开启云桌面到客户端<br>2：开启客户端到云桌面<br>3：双向开启<br>4：禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDrivePolicyId() 获取<p>外设重定向策略id。取值范围：<br>1：允许usb重定向<br>2：允许端口重定向<br>3：允许usb和端口重定向<br>4：禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrivePolicyId(integer $DrivePolicyId) 设置<p>外设重定向策略id。取值范围：<br>1：允许usb重定向<br>2：允许端口重定向<br>3：允许usb和端口重定向<br>4：禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaterMarkPolicyId() 获取<p>水印重定向策略id。取值范围（离散值）：<br>4:   当前时间，居中策略<br>10: 当前时间，平铺策略<br>15:  云桌面ID， 居中策略<br>16:  云桌面ID+当前时间， 居中策略<br>17:  云桌面ID， 平铺策略<br>18:  云桌面ID+当前时间， 平铺策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaterMarkPolicyId(integer $WaterMarkPolicyId) 设置<p>水印重定向策略id。取值范围（离散值）：<br>4:   当前时间，居中策略<br>10: 当前时间，平铺策略<br>15:  云桌面ID， 居中策略<br>16:  云桌面ID+当前时间， 居中策略<br>17:  云桌面ID， 平铺策略<br>18:  云桌面ID+当前时间， 平铺策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDefault() 获取<p>是否是默认策略</p>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否是默认策略</p>
 * @method integer getTotalUser() 获取<p>注意：默认策略的当前值无效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalUser(integer $TotalUser) 设置<p>注意：默认策略的当前值无效</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PolicyDetail extends AbstractModel
{
    /**
     * @var string <p>策略id</p>
     */
    public $PolicyId;

    /**
     * @var string <p>策略名称</p>
     */
    public $PolicyName;

    /**
     * @var string <p>策略描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array <p>策略作用用户id列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserIds;

    /**
     * @var string <p>策略的租户uin</p>
     */
    public $Uin;

    /**
     * @var integer <p>文件重定向策略id。取值范围：<br>1：读写<br>2：只读<br>3：禁止读写</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePolicyId;

    /**
     * @var integer <p>剪切板重定向策略id。取值范围：<br>1：开启云桌面到客户端<br>2：开启客户端到云桌面<br>3：双向开启<br>4：禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClipPolicyId;

    /**
     * @var integer <p>外设重定向策略id。取值范围：<br>1：允许usb重定向<br>2：允许端口重定向<br>3：允许usb和端口重定向<br>4：禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrivePolicyId;

    /**
     * @var integer <p>水印重定向策略id。取值范围（离散值）：<br>4:   当前时间，居中策略<br>10: 当前时间，平铺策略<br>15:  云桌面ID， 居中策略<br>16:  云桌面ID+当前时间， 居中策略<br>17:  云桌面ID， 平铺策略<br>18:  云桌面ID+当前时间， 平铺策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaterMarkPolicyId;

    /**
     * @var boolean <p>是否是默认策略</p>
     */
    public $IsDefault;

    /**
     * @var integer <p>注意：默认策略的当前值无效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalUser;

    /**
     * @param string $PolicyId <p>策略id</p>
     * @param string $PolicyName <p>策略名称</p>
     * @param string $Description <p>策略描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserIds <p>策略作用用户id列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>策略的租户uin</p>
     * @param integer $FilePolicyId <p>文件重定向策略id。取值范围：<br>1：读写<br>2：只读<br>3：禁止读写</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClipPolicyId <p>剪切板重定向策略id。取值范围：<br>1：开启云桌面到客户端<br>2：开启客户端到云桌面<br>3：双向开启<br>4：禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DrivePolicyId <p>外设重定向策略id。取值范围：<br>1：允许usb重定向<br>2：允许端口重定向<br>3：允许usb和端口重定向<br>4：禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaterMarkPolicyId <p>水印重定向策略id。取值范围（离散值）：<br>4:   当前时间，居中策略<br>10: 当前时间，平铺策略<br>15:  云桌面ID， 居中策略<br>16:  云桌面ID+当前时间， 居中策略<br>17:  云桌面ID， 平铺策略<br>18:  云桌面ID+当前时间， 平铺策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDefault <p>是否是默认策略</p>
     * @param integer $TotalUser <p>注意：默认策略的当前值无效</p>
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("FilePolicyId",$param) and $param["FilePolicyId"] !== null) {
            $this->FilePolicyId = $param["FilePolicyId"];
        }

        if (array_key_exists("ClipPolicyId",$param) and $param["ClipPolicyId"] !== null) {
            $this->ClipPolicyId = $param["ClipPolicyId"];
        }

        if (array_key_exists("DrivePolicyId",$param) and $param["DrivePolicyId"] !== null) {
            $this->DrivePolicyId = $param["DrivePolicyId"];
        }

        if (array_key_exists("WaterMarkPolicyId",$param) and $param["WaterMarkPolicyId"] !== null) {
            $this->WaterMarkPolicyId = $param["WaterMarkPolicyId"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("TotalUser",$param) and $param["TotalUser"] !== null) {
            $this->TotalUser = $param["TotalUser"];
        }
    }
}
