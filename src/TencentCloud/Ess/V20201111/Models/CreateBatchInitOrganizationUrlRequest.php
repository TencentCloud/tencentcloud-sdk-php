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
 * CreateBatchInitOrganizationUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method array getOperateTypes() 获取<p>初始化操作类型<ul><li>CREATE_SEAL : 创建印章</li><li>AUTH_JOIN_ORGANIZATION_GROUP : 加入集团企业</li><li>OPEN_AUTO_SIGN :开通企业“授权签”</li><li>PARTNER_AUTO_SIGN_AUTH :合作方企业授权“授权签”</li><li>CHANGE_SUB_ORGANIZATION_ADMIN_AUTH :变更子企业超管授权(<strong>授权后，主企业可变更子企业超管，此功能需联系客户经理开通白名单使用</strong>)</li></ul></p>
 * @method void setOperateTypes(array $OperateTypes) 设置<p>初始化操作类型<ul><li>CREATE_SEAL : 创建印章</li><li>AUTH_JOIN_ORGANIZATION_GROUP : 加入集团企业</li><li>OPEN_AUTO_SIGN :开通企业“授权签”</li><li>PARTNER_AUTO_SIGN_AUTH :合作方企业授权“授权签”</li><li>CHANGE_SUB_ORGANIZATION_ADMIN_AUTH :变更子企业超管授权(<strong>授权后，主企业可变更子企业超管，此功能需联系客户经理开通白名单使用</strong>)</li></ul></p>
 * @method array getOrganizationIds() 获取<p>批量操作的企业Id列表，最大支持50个</p>
 * @method void setOrganizationIds(array $OrganizationIds) 设置<p>批量操作的企业Id列表，最大支持50个</p>
 * @method Agent getAgent() 获取<p>代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填</p>
 * @method string getAuthorizedOrganizationId() 获取<p>被授权的合作方企业在电子签的企业电子签账号，当操作类型包含 PARTNER_AUTO_SIGN_AUTH （合作方企业授权“授权签”）时必传。企业电子签账号可在<a href="https://qian.tencent.com/console/company-settings/company-center">电子签的网页端</a> ，于企业设置-企业信息菜单栏下复制获取。<img src="https://qcloudimg.tencent-cloud.cn/raw/4e6b30ee92f00671f7f1c5bd127c27db.png" alt="企业电子签账号"></p>
 * @method void setAuthorizedOrganizationId(string $AuthorizedOrganizationId) 设置<p>被授权的合作方企业在电子签的企业电子签账号，当操作类型包含 PARTNER_AUTO_SIGN_AUTH （合作方企业授权“授权签”）时必传。企业电子签账号可在<a href="https://qian.tencent.com/console/company-settings/company-center">电子签的网页端</a> ，于企业设置-企业信息菜单栏下复制获取。<img src="https://qcloudimg.tencent-cloud.cn/raw/4e6b30ee92f00671f7f1c5bd127c27db.png" alt="企业电子签账号"></p>
 * @method boolean getChangeAdminAuthAutoSign() 获取<p>初始化操作类型里含有CHANGE_SUB_ORGANIZATION_ADMIN_AUTH（变更子企业超管授权）操作类型时，授权协议中主企业的签署方是否使用“授权签”（需操作人有“授权签”授权）</p>
 * @method void setChangeAdminAuthAutoSign(boolean $ChangeAdminAuthAutoSign) 设置<p>初始化操作类型里含有CHANGE_SUB_ORGANIZATION_ADMIN_AUTH（变更子企业超管授权）操作类型时，授权协议中主企业的签署方是否使用“授权签”（需操作人有“授权签”授权）</p>
 */
class CreateBatchInitOrganizationUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var array <p>初始化操作类型<ul><li>CREATE_SEAL : 创建印章</li><li>AUTH_JOIN_ORGANIZATION_GROUP : 加入集团企业</li><li>OPEN_AUTO_SIGN :开通企业“授权签”</li><li>PARTNER_AUTO_SIGN_AUTH :合作方企业授权“授权签”</li><li>CHANGE_SUB_ORGANIZATION_ADMIN_AUTH :变更子企业超管授权(<strong>授权后，主企业可变更子企业超管，此功能需联系客户经理开通白名单使用</strong>)</li></ul></p>
     */
    public $OperateTypes;

    /**
     * @var array <p>批量操作的企业Id列表，最大支持50个</p>
     */
    public $OrganizationIds;

    /**
     * @var Agent <p>代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填</p>
     */
    public $Agent;

    /**
     * @var string <p>被授权的合作方企业在电子签的企业电子签账号，当操作类型包含 PARTNER_AUTO_SIGN_AUTH （合作方企业授权“授权签”）时必传。企业电子签账号可在<a href="https://qian.tencent.com/console/company-settings/company-center">电子签的网页端</a> ，于企业设置-企业信息菜单栏下复制获取。<img src="https://qcloudimg.tencent-cloud.cn/raw/4e6b30ee92f00671f7f1c5bd127c27db.png" alt="企业电子签账号"></p>
     */
    public $AuthorizedOrganizationId;

    /**
     * @var boolean <p>初始化操作类型里含有CHANGE_SUB_ORGANIZATION_ADMIN_AUTH（变更子企业超管授权）操作类型时，授权协议中主企业的签署方是否使用“授权签”（需操作人有“授权签”授权）</p>
     */
    public $ChangeAdminAuthAutoSign;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param array $OperateTypes <p>初始化操作类型<ul><li>CREATE_SEAL : 创建印章</li><li>AUTH_JOIN_ORGANIZATION_GROUP : 加入集团企业</li><li>OPEN_AUTO_SIGN :开通企业“授权签”</li><li>PARTNER_AUTO_SIGN_AUTH :合作方企业授权“授权签”</li><li>CHANGE_SUB_ORGANIZATION_ADMIN_AUTH :变更子企业超管授权(<strong>授权后，主企业可变更子企业超管，此功能需联系客户经理开通白名单使用</strong>)</li></ul></p>
     * @param array $OrganizationIds <p>批量操作的企业Id列表，最大支持50个</p>
     * @param Agent $Agent <p>代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填</p>
     * @param string $AuthorizedOrganizationId <p>被授权的合作方企业在电子签的企业电子签账号，当操作类型包含 PARTNER_AUTO_SIGN_AUTH （合作方企业授权“授权签”）时必传。企业电子签账号可在<a href="https://qian.tencent.com/console/company-settings/company-center">电子签的网页端</a> ，于企业设置-企业信息菜单栏下复制获取。<img src="https://qcloudimg.tencent-cloud.cn/raw/4e6b30ee92f00671f7f1c5bd127c27db.png" alt="企业电子签账号"></p>
     * @param boolean $ChangeAdminAuthAutoSign <p>初始化操作类型里含有CHANGE_SUB_ORGANIZATION_ADMIN_AUTH（变更子企业超管授权）操作类型时，授权协议中主企业的签署方是否使用“授权签”（需操作人有“授权签”授权）</p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("OperateTypes",$param) and $param["OperateTypes"] !== null) {
            $this->OperateTypes = $param["OperateTypes"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("AuthorizedOrganizationId",$param) and $param["AuthorizedOrganizationId"] !== null) {
            $this->AuthorizedOrganizationId = $param["AuthorizedOrganizationId"];
        }

        if (array_key_exists("ChangeAdminAuthAutoSign",$param) and $param["ChangeAdminAuthAutoSign"] !== null) {
            $this->ChangeAdminAuthAutoSign = $param["ChangeAdminAuthAutoSign"];
        }
    }
}
