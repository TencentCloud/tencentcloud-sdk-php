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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业变更超管信息。
 *
 * @method string getChangeAdminOrganizationId() 获取<p>要变更的企业Id。 使用接口进行变更，所支持的企业有两种。</p><p>注意：<br>此参数和 ChangeAdminOrganizationOpenId二选一，如果都传递了，但是不一致会进行报错拦截。</p>
 * @method void setChangeAdminOrganizationId(string $ChangeAdminOrganizationId) 设置<p>要变更的企业Id。 使用接口进行变更，所支持的企业有两种。</p><p>注意：<br>此参数和 ChangeAdminOrganizationOpenId二选一，如果都传递了，但是不一致会进行报错拦截。</p>
 * @method string getChangeAdminOrganizationOpenId() 获取<p>要变更的企业Id。 使用接口进行变更，所支持的企业有两种。<br>注意： 此参数和 ChangeAdminOrganizationId二选一，如果都传递了，不一致会进行报错拦截。</p>
 * @method void setChangeAdminOrganizationOpenId(string $ChangeAdminOrganizationOpenId) 设置<p>要变更的企业Id。 使用接口进行变更，所支持的企业有两种。<br>注意： 此参数和 ChangeAdminOrganizationId二选一，如果都传递了，不一致会进行报错拦截。</p>
 * @method string getNewAdminOpenId() 获取<p>组织机构要变更的超管OpenId。</p>
 * @method void setNewAdminOpenId(string $NewAdminOpenId) 设置<p>组织机构要变更的超管OpenId。</p>
 * @method string getNewAdminName() 获取<p>组织机构要变更的超管姓名。</p>
 * @method void setNewAdminName(string $NewAdminName) 设置<p>组织机构要变更的超管姓名。</p>
 * @method string getNewAdminMobile() 获取<p>组织机构要变更的超管手机号。 跟超管变更的操作人保持一致。</p>
 * @method void setNewAdminMobile(string $NewAdminMobile) 设置<p>组织机构要变更的超管手机号。 跟超管变更的操作人保持一致。</p>
 * @method string getNewAdminIdCardType() 获取<p>组织机构要变更的超管证件类型支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>跟超管变更的操作人保持一致。</p><p>枚举值：</p><ul><li>ID_CARD： 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO： 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN： 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
 * @method void setNewAdminIdCardType(string $NewAdminIdCardType) 设置<p>组织机构要变更的超管证件类型支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>跟超管变更的操作人保持一致。</p><p>枚举值：</p><ul><li>ID_CARD： 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO： 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN： 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
 * @method string getNewAdminIdCardNumber() 获取<p>组织机构新超管证件号。 跟超管变更的操作人保持一致。</p>
 * @method void setNewAdminIdCardNumber(string $NewAdminIdCardNumber) 设置<p>组织机构新超管证件号。 跟超管变更的操作人保持一致。</p>
 * @method array getAuthFiles() 获取<p>授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。</p><p> p.s. 如果上传授权书 ，需遵循以下条件 1. 超管的信息（超管姓名，超管手机号）必须为必填参数。</p>
 * @method void setAuthFiles(array $AuthFiles) 设置<p>授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。</p><p> p.s. 如果上传授权书 ，需遵循以下条件 1. 超管的信息（超管姓名，超管手机号）必须为必填参数。</p>
 */
class AdminChangeInvitationInfo extends AbstractModel
{
    /**
     * @var string <p>要变更的企业Id。 使用接口进行变更，所支持的企业有两种。</p><p>注意：<br>此参数和 ChangeAdminOrganizationOpenId二选一，如果都传递了，但是不一致会进行报错拦截。</p>
     */
    public $ChangeAdminOrganizationId;

    /**
     * @var string <p>要变更的企业Id。 使用接口进行变更，所支持的企业有两种。<br>注意： 此参数和 ChangeAdminOrganizationId二选一，如果都传递了，不一致会进行报错拦截。</p>
     */
    public $ChangeAdminOrganizationOpenId;

    /**
     * @var string <p>组织机构要变更的超管OpenId。</p>
     */
    public $NewAdminOpenId;

    /**
     * @var string <p>组织机构要变更的超管姓名。</p>
     */
    public $NewAdminName;

    /**
     * @var string <p>组织机构要变更的超管手机号。 跟超管变更的操作人保持一致。</p>
     */
    public $NewAdminMobile;

    /**
     * @var string <p>组织机构要变更的超管证件类型支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>跟超管变更的操作人保持一致。</p><p>枚举值：</p><ul><li>ID_CARD： 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO： 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN： 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
     */
    public $NewAdminIdCardType;

    /**
     * @var string <p>组织机构新超管证件号。 跟超管变更的操作人保持一致。</p>
     */
    public $NewAdminIdCardNumber;

    /**
     * @var array <p>授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。</p><p> p.s. 如果上传授权书 ，需遵循以下条件 1. 超管的信息（超管姓名，超管手机号）必须为必填参数。</p>
     */
    public $AuthFiles;

    /**
     * @param string $ChangeAdminOrganizationId <p>要变更的企业Id。 使用接口进行变更，所支持的企业有两种。</p><p>注意：<br>此参数和 ChangeAdminOrganizationOpenId二选一，如果都传递了，但是不一致会进行报错拦截。</p>
     * @param string $ChangeAdminOrganizationOpenId <p>要变更的企业Id。 使用接口进行变更，所支持的企业有两种。<br>注意： 此参数和 ChangeAdminOrganizationId二选一，如果都传递了，不一致会进行报错拦截。</p>
     * @param string $NewAdminOpenId <p>组织机构要变更的超管OpenId。</p>
     * @param string $NewAdminName <p>组织机构要变更的超管姓名。</p>
     * @param string $NewAdminMobile <p>组织机构要变更的超管手机号。 跟超管变更的操作人保持一致。</p>
     * @param string $NewAdminIdCardType <p>组织机构要变更的超管证件类型支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>跟超管变更的操作人保持一致。</p><p>枚举值：</p><ul><li>ID_CARD： 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO： 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN： 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
     * @param string $NewAdminIdCardNumber <p>组织机构新超管证件号。 跟超管变更的操作人保持一致。</p>
     * @param array $AuthFiles <p>授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。</p><p> p.s. 如果上传授权书 ，需遵循以下条件 1. 超管的信息（超管姓名，超管手机号）必须为必填参数。</p>
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

        if (array_key_exists("ChangeAdminOrganizationOpenId",$param) and $param["ChangeAdminOrganizationOpenId"] !== null) {
            $this->ChangeAdminOrganizationOpenId = $param["ChangeAdminOrganizationOpenId"];
        }

        if (array_key_exists("NewAdminOpenId",$param) and $param["NewAdminOpenId"] !== null) {
            $this->NewAdminOpenId = $param["NewAdminOpenId"];
        }

        if (array_key_exists("NewAdminName",$param) and $param["NewAdminName"] !== null) {
            $this->NewAdminName = $param["NewAdminName"];
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

        if (array_key_exists("AuthFiles",$param) and $param["AuthFiles"] !== null) {
            $this->AuthFiles = $param["AuthFiles"];
        }
    }
}
