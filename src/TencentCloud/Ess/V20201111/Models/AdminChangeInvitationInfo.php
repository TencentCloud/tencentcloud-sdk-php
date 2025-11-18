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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业变更超管信息。
 *
 * @method string getChangeAdminOrganizationId() 获取要变更的企业Id。
使用接口进行变更，所支持的企业有两种。
1. 集团主企业替子企业进行超管变更。
    子企业的企业 Id 可在更多-组织管理-集团组织管理处获取。如图位置![image](https://qcloudimg.tencent-cloud.cn/raw/3d4469c13ca9e66a847560fc4309c58b.png)
2. 使用接口[创建企业认证链接](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthUrl) 创建的企业，企业 Id 可以从回调[企业引导企业实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E4%B8%80-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%BC%81%E4%B8%9A%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)得到。
 * @method void setChangeAdminOrganizationId(string $ChangeAdminOrganizationId) 设置要变更的企业Id。
使用接口进行变更，所支持的企业有两种。
1. 集团主企业替子企业进行超管变更。
    子企业的企业 Id 可在更多-组织管理-集团组织管理处获取。如图位置![image](https://qcloudimg.tencent-cloud.cn/raw/3d4469c13ca9e66a847560fc4309c58b.png)
2. 使用接口[创建企业认证链接](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthUrl) 创建的企业，企业 Id 可以从回调[企业引导企业实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E4%B8%80-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%BC%81%E4%B8%9A%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)得到。
 * @method string getNewAdminName() 获取组织机构要变更的超管姓名。 
跟超管变更的操作人保持一致。

 * @method void setNewAdminName(string $NewAdminName) 设置组织机构要变更的超管姓名。 
跟超管变更的操作人保持一致。

 * @method array getAuthFiles() 获取授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
p.s. 如果上传授权书 ，需遵循以下条件
1. 超管的信息（超管姓名，超管手机号）必须为必填参数。
 * @method void setAuthFiles(array $AuthFiles) 设置授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
p.s. 如果上传授权书 ，需遵循以下条件
1. 超管的信息（超管姓名，超管手机号）必须为必填参数。
 * @method string getNewAdminMobile() 获取组织机构要变更的超管手机号。
跟超管变更的操作人保持一致。
超管变更的手机号和超管变更的证件号，必须要传递一个。
 * @method void setNewAdminMobile(string $NewAdminMobile) 设置组织机构要变更的超管手机号。
跟超管变更的操作人保持一致。
超管变更的手机号和超管变更的证件号，必须要传递一个。
 * @method string getNewAdminIdCardType() 获取组织机构要变更的超管证件类型支持以下类型
- ID_CARD : 中国大陆居民身份证 (默认值)
- HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证
- HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)

跟超管变更的操作人保持一致。

 * @method void setNewAdminIdCardType(string $NewAdminIdCardType) 设置组织机构要变更的超管证件类型支持以下类型
- ID_CARD : 中国大陆居民身份证 (默认值)
- HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证
- HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)

跟超管变更的操作人保持一致。

 * @method string getNewAdminIdCardNumber() 获取组织机构新超管证件号。

跟超管变更的操作人保持一致。

超管变更的手机号和超管变更的证件号，必须要传递一个。
 * @method void setNewAdminIdCardNumber(string $NewAdminIdCardNumber) 设置组织机构新超管证件号。

跟超管变更的操作人保持一致。

超管变更的手机号和超管变更的证件号，必须要传递一个。
 */
class AdminChangeInvitationInfo extends AbstractModel
{
    /**
     * @var string 要变更的企业Id。
使用接口进行变更，所支持的企业有两种。
1. 集团主企业替子企业进行超管变更。
    子企业的企业 Id 可在更多-组织管理-集团组织管理处获取。如图位置![image](https://qcloudimg.tencent-cloud.cn/raw/3d4469c13ca9e66a847560fc4309c58b.png)
2. 使用接口[创建企业认证链接](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthUrl) 创建的企业，企业 Id 可以从回调[企业引导企业实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E4%B8%80-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%BC%81%E4%B8%9A%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)得到。
     */
    public $ChangeAdminOrganizationId;

    /**
     * @var string 组织机构要变更的超管姓名。 
跟超管变更的操作人保持一致。

     */
    public $NewAdminName;

    /**
     * @var array 授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
p.s. 如果上传授权书 ，需遵循以下条件
1. 超管的信息（超管姓名，超管手机号）必须为必填参数。
     */
    public $AuthFiles;

    /**
     * @var string 组织机构要变更的超管手机号。
跟超管变更的操作人保持一致。
超管变更的手机号和超管变更的证件号，必须要传递一个。
     */
    public $NewAdminMobile;

    /**
     * @var string 组织机构要变更的超管证件类型支持以下类型
- ID_CARD : 中国大陆居民身份证 (默认值)
- HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证
- HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)

跟超管变更的操作人保持一致。

     */
    public $NewAdminIdCardType;

    /**
     * @var string 组织机构新超管证件号。

跟超管变更的操作人保持一致。

超管变更的手机号和超管变更的证件号，必须要传递一个。
     */
    public $NewAdminIdCardNumber;

    /**
     * @param string $ChangeAdminOrganizationId 要变更的企业Id。
使用接口进行变更，所支持的企业有两种。
1. 集团主企业替子企业进行超管变更。
    子企业的企业 Id 可在更多-组织管理-集团组织管理处获取。如图位置![image](https://qcloudimg.tencent-cloud.cn/raw/3d4469c13ca9e66a847560fc4309c58b.png)
2. 使用接口[创建企业认证链接](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthUrl) 创建的企业，企业 Id 可以从回调[企业引导企业实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E4%B8%80-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%BC%81%E4%B8%9A%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)得到。
     * @param string $NewAdminName 组织机构要变更的超管姓名。 
跟超管变更的操作人保持一致。

     * @param array $AuthFiles 授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
p.s. 如果上传授权书 ，需遵循以下条件
1. 超管的信息（超管姓名，超管手机号）必须为必填参数。
     * @param string $NewAdminMobile 组织机构要变更的超管手机号。
跟超管变更的操作人保持一致。
超管变更的手机号和超管变更的证件号，必须要传递一个。
     * @param string $NewAdminIdCardType 组织机构要变更的超管证件类型支持以下类型
- ID_CARD : 中国大陆居民身份证 (默认值)
- HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证
- HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)

跟超管变更的操作人保持一致。

     * @param string $NewAdminIdCardNumber 组织机构新超管证件号。

跟超管变更的操作人保持一致。

超管变更的手机号和超管变更的证件号，必须要传递一个。
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
        if (array_key_exists("ChangeAdminOrganizationId",$param) and $param["ChangeAdminOrganizationId"] !== null) {
            $this->ChangeAdminOrganizationId = $param["ChangeAdminOrganizationId"];
        }

        if (array_key_exists("NewAdminName",$param) and $param["NewAdminName"] !== null) {
            $this->NewAdminName = $param["NewAdminName"];
        }

        if (array_key_exists("AuthFiles",$param) and $param["AuthFiles"] !== null) {
            $this->AuthFiles = $param["AuthFiles"];
        }

        if (array_key_exists("NewAdminMobile",$param) and $param["NewAdminMobile"] !== null) {
            $this->NewAdminMobile = $param["NewAdminMobile"];
        }

        if (array_key_exists("NewAdminIdCardType",$param) and $param["NewAdminIdCardType"] !== null) {
            $this->NewAdminIdCardType = $param["NewAdminIdCardType"];
        }

        if (array_key_exists("NewAdminIdCardNumber",$param) and $param["NewAdminIdCardNumber"] !== null) {
            $this->NewAdminIdCardNumber = $param["NewAdminIdCardNumber"];
        }
    }
}
