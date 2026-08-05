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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyHTTPServiceRoute返回参数结构体
 *
 * @method boolean getPassed() 获取<p>前置校验总开关。所有启用的检查项均为 PASS 或 SKIPPED 时为 true，任一检查项为 FAIL 时为 false。当为 false 时，前端应根据各 CheckItem 的 Code 精确渲染错误提示和操作指引；当为 true 时可继续调用 CreateHTTPServiceRoute 完成创建。 示例值：false</p>
 * @method void setPassed(boolean $Passed) 设置<p>前置校验总开关。所有启用的检查项均为 PASS 或 SKIPPED 时为 true，任一检查项为 FAIL 时为 false。当为 false 时，前端应根据各 CheckItem 的 Code 精确渲染错误提示和操作指引；当为 true 时可继续调用 CreateHTTPServiceRoute 完成创建。 示例值：false</p>
 * @method VerifyHTTPServiceRouteCheckItem getOwnership() 获取<p>域名归属权校验结果</p>
 * @method void setOwnership(VerifyHTTPServiceRouteCheckItem $Ownership) 设置<p>域名归属权校验结果</p>
 * @method VerifyHTTPServiceRouteCheckItem getCert() 获取<p>证书校验结果；CertId 为空时 Status=SKIPPED</p>
 * @method void setCert(VerifyHTTPServiceRouteCheckItem $Cert) 设置<p>证书校验结果；CertId 为空时 Status=SKIPPED</p>
 * @method VerifyHTTPServiceRouteCheckItem getQuota() 获取<p>域名/路径数量配额校验结果</p>
 * @method void setQuota(VerifyHTTPServiceRouteCheckItem $Quota) 设置<p>域名/路径数量配额校验结果</p>
 * @method VerifyHTTPServiceRouteCheckItem getRouteConflict() 获取<p>同域名下路由路径冲突校验结果</p>
 * @method void setRouteConflict(VerifyHTTPServiceRouteCheckItem $RouteConflict) 设置<p>同域名下路由路径冲突校验结果</p>
 * @method VerifyHTTPServiceRouteCheckItem getDomainConflict() 获取<p>域名被其他环境占用校验结果</p>
 * @method void setDomainConflict(VerifyHTTPServiceRouteCheckItem $DomainConflict) 设置<p>域名被其他环境占用校验结果</p>
 * @method VerifyHTTPServiceRouteCheckItem getInternalAccount() 获取<p>内部域名且非内部账号校验结果</p>
 * @method void setInternalAccount(VerifyHTTPServiceRouteCheckItem $InternalAccount) 设置<p>内部域名且非内部账号校验结果</p>
 * @method VerifyHTTPServiceRouteCheckItem getBlacklist() 获取<p>域名黑名单校验结果</p>
 * @method void setBlacklist(VerifyHTTPServiceRouteCheckItem $Blacklist) 设置<p>域名黑名单校验结果</p>
 * @method VerifyHTTPServiceRouteCheckItem getCDNResource() 获取<p>AccessType=CDN 时 CDN 资源存在性 / 状态校验结果（含 ICP 未备案的提示）</p>
 * @method void setCDNResource(VerifyHTTPServiceRouteCheckItem $CDNResource) 设置<p>AccessType=CDN 时 CDN 资源存在性 / 状态校验结果（含 ICP 未备案的提示）</p>
 * @method VerifyHTTPServiceRouteCheckItem getEO() 获取<p>AccessType=EO 时的 EdgeOne 预检结果（域名冲突/备案/归属权）</p>
 * @method void setEO(VerifyHTTPServiceRouteCheckItem $EO) 设置<p>AccessType=EO 时的 EdgeOne 预检结果（域名冲突/备案/归属权）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyHTTPServiceRouteResponse extends AbstractModel
{
    /**
     * @var boolean <p>前置校验总开关。所有启用的检查项均为 PASS 或 SKIPPED 时为 true，任一检查项为 FAIL 时为 false。当为 false 时，前端应根据各 CheckItem 的 Code 精确渲染错误提示和操作指引；当为 true 时可继续调用 CreateHTTPServiceRoute 完成创建。 示例值：false</p>
     */
    public $Passed;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>域名归属权校验结果</p>
     */
    public $Ownership;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>证书校验结果；CertId 为空时 Status=SKIPPED</p>
     */
    public $Cert;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>域名/路径数量配额校验结果</p>
     */
    public $Quota;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>同域名下路由路径冲突校验结果</p>
     */
    public $RouteConflict;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>域名被其他环境占用校验结果</p>
     */
    public $DomainConflict;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>内部域名且非内部账号校验结果</p>
     */
    public $InternalAccount;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>域名黑名单校验结果</p>
     */
    public $Blacklist;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>AccessType=CDN 时 CDN 资源存在性 / 状态校验结果（含 ICP 未备案的提示）</p>
     */
    public $CDNResource;

    /**
     * @var VerifyHTTPServiceRouteCheckItem <p>AccessType=EO 时的 EdgeOne 预检结果（域名冲突/备案/归属权）</p>
     */
    public $EO;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Passed <p>前置校验总开关。所有启用的检查项均为 PASS 或 SKIPPED 时为 true，任一检查项为 FAIL 时为 false。当为 false 时，前端应根据各 CheckItem 的 Code 精确渲染错误提示和操作指引；当为 true 时可继续调用 CreateHTTPServiceRoute 完成创建。 示例值：false</p>
     * @param VerifyHTTPServiceRouteCheckItem $Ownership <p>域名归属权校验结果</p>
     * @param VerifyHTTPServiceRouteCheckItem $Cert <p>证书校验结果；CertId 为空时 Status=SKIPPED</p>
     * @param VerifyHTTPServiceRouteCheckItem $Quota <p>域名/路径数量配额校验结果</p>
     * @param VerifyHTTPServiceRouteCheckItem $RouteConflict <p>同域名下路由路径冲突校验结果</p>
     * @param VerifyHTTPServiceRouteCheckItem $DomainConflict <p>域名被其他环境占用校验结果</p>
     * @param VerifyHTTPServiceRouteCheckItem $InternalAccount <p>内部域名且非内部账号校验结果</p>
     * @param VerifyHTTPServiceRouteCheckItem $Blacklist <p>域名黑名单校验结果</p>
     * @param VerifyHTTPServiceRouteCheckItem $CDNResource <p>AccessType=CDN 时 CDN 资源存在性 / 状态校验结果（含 ICP 未备案的提示）</p>
     * @param VerifyHTTPServiceRouteCheckItem $EO <p>AccessType=EO 时的 EdgeOne 预检结果（域名冲突/备案/归属权）</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Passed",$param) and $param["Passed"] !== null) {
            $this->Passed = $param["Passed"];
        }

        if (array_key_exists("Ownership",$param) and $param["Ownership"] !== null) {
            $this->Ownership = new VerifyHTTPServiceRouteCheckItem();
            $this->Ownership->deserialize($param["Ownership"]);
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = new VerifyHTTPServiceRouteCheckItem();
            $this->Cert->deserialize($param["Cert"]);
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = new VerifyHTTPServiceRouteCheckItem();
            $this->Quota->deserialize($param["Quota"]);
        }

        if (array_key_exists("RouteConflict",$param) and $param["RouteConflict"] !== null) {
            $this->RouteConflict = new VerifyHTTPServiceRouteCheckItem();
            $this->RouteConflict->deserialize($param["RouteConflict"]);
        }

        if (array_key_exists("DomainConflict",$param) and $param["DomainConflict"] !== null) {
            $this->DomainConflict = new VerifyHTTPServiceRouteCheckItem();
            $this->DomainConflict->deserialize($param["DomainConflict"]);
        }

        if (array_key_exists("InternalAccount",$param) and $param["InternalAccount"] !== null) {
            $this->InternalAccount = new VerifyHTTPServiceRouteCheckItem();
            $this->InternalAccount->deserialize($param["InternalAccount"]);
        }

        if (array_key_exists("Blacklist",$param) and $param["Blacklist"] !== null) {
            $this->Blacklist = new VerifyHTTPServiceRouteCheckItem();
            $this->Blacklist->deserialize($param["Blacklist"]);
        }

        if (array_key_exists("CDNResource",$param) and $param["CDNResource"] !== null) {
            $this->CDNResource = new VerifyHTTPServiceRouteCheckItem();
            $this->CDNResource->deserialize($param["CDNResource"]);
        }

        if (array_key_exists("EO",$param) and $param["EO"] !== null) {
            $this->EO = new VerifyHTTPServiceRouteCheckItem();
            $this->EO->deserialize($param["EO"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
