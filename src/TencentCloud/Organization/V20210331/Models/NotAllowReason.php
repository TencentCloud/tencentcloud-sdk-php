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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 不允许删除的原因。
 *
 * @method boolean getIsCreateMember() 获取<p>是否创建的成员。true-是、false-否；成员不是创建的成员不允许删除</p>
 * @method void setIsCreateMember(boolean $IsCreateMember) 设置<p>是否创建的成员。true-是、false-否；成员不是创建的成员不允许删除</p>
 * @method boolean getDeletionPermission() 获取<p>成员删除许可。true-开启、false-关闭；成员删除许可关闭时不允许删除</p>
 * @method void setDeletionPermission(boolean $DeletionPermission) 设置<p>成员删除许可。true-开启、false-关闭；成员删除许可关闭时不允许删除</p>
 * @method boolean getIsAssignManager() 获取<p>是否可信服务委派管理员。true-是、false-否；成员是可信服务委派管理员不允许删除</p>
 * @method void setIsAssignManager(boolean $IsAssignManager) 设置<p>是否可信服务委派管理员。true-是、false-否；成员是可信服务委派管理员不允许删除</p>
 * @method boolean getIsAuthManager() 获取<p>是否主体管理员。true-是、false-否；成员是主体管理员不允许删除</p>
 * @method void setIsAuthManager(boolean $IsAuthManager) 设置<p>是否主体管理员。true-是、false-否；成员是主体管理员不允许删除</p>
 * @method boolean getIsShareManager() 获取<p>是否共享资源管理员。true-是、false-否；成员是共享资源管理员不允许删除</p>
 * @method void setIsShareManager(boolean $IsShareManager) 设置<p>是否共享资源管理员。true-是、false-否；成员是共享资源管理员不允许删除</p>
 * @method boolean getOperateProcess() 获取<p>成员是否设置了操作审批。true-是、false-否；成员设置了操作审批时不允许删除</p>
 * @method void setOperateProcess(boolean $OperateProcess) 设置<p>成员是否设置了操作审批。true-是、false-否；成员设置了操作审批时不允许删除</p>
 * @method boolean getBillingPermission() 获取<p>是否允许解除成员财务权限。true-是、false-否；成员不能解除财务权限时不允许删除</p>
 * @method void setBillingPermission(boolean $BillingPermission) 设置<p>是否允许解除成员财务权限。true-是、false-否；成员不能解除财务权限时不允许删除</p>
 * @method array getExistResources() 获取<p>存在的资源列表。账号存在资源时不允许删除</p>
 * @method void setExistResources(array $ExistResources) 设置<p>存在的资源列表。账号存在资源时不允许删除</p>
 * @method array getDetectFailedResources() 获取<p>检测失败的资源列表。账号有资源检测失败时不允许删除。</p>
 * @method void setDetectFailedResources(array $DetectFailedResources) 设置<p>检测失败的资源列表。账号有资源检测失败时不允许删除。</p>
 * @method boolean getCICRoleConfig() 获取<p>是否部署身份中心权限。部署权限不允许删除</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setCICRoleConfig(boolean $CICRoleConfig) 设置<p>是否部署身份中心权限。部署权限不允许删除</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method boolean getCICUserConfig() 获取<p>是否同步身份中心用户。同步用户不允许删除</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setCICUserConfig(boolean $CICUserConfig) 设置<p>是否同步身份中心用户。同步用户不允许删除</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 */
class NotAllowReason extends AbstractModel
{
    /**
     * @var boolean <p>是否创建的成员。true-是、false-否；成员不是创建的成员不允许删除</p>
     */
    public $IsCreateMember;

    /**
     * @var boolean <p>成员删除许可。true-开启、false-关闭；成员删除许可关闭时不允许删除</p>
     */
    public $DeletionPermission;

    /**
     * @var boolean <p>是否可信服务委派管理员。true-是、false-否；成员是可信服务委派管理员不允许删除</p>
     */
    public $IsAssignManager;

    /**
     * @var boolean <p>是否主体管理员。true-是、false-否；成员是主体管理员不允许删除</p>
     */
    public $IsAuthManager;

    /**
     * @var boolean <p>是否共享资源管理员。true-是、false-否；成员是共享资源管理员不允许删除</p>
     */
    public $IsShareManager;

    /**
     * @var boolean <p>成员是否设置了操作审批。true-是、false-否；成员设置了操作审批时不允许删除</p>
     */
    public $OperateProcess;

    /**
     * @var boolean <p>是否允许解除成员财务权限。true-是、false-否；成员不能解除财务权限时不允许删除</p>
     */
    public $BillingPermission;

    /**
     * @var array <p>存在的资源列表。账号存在资源时不允许删除</p>
     */
    public $ExistResources;

    /**
     * @var array <p>检测失败的资源列表。账号有资源检测失败时不允许删除。</p>
     */
    public $DetectFailedResources;

    /**
     * @var boolean <p>是否部署身份中心权限。部署权限不允许删除</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $CICRoleConfig;

    /**
     * @var boolean <p>是否同步身份中心用户。同步用户不允许删除</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $CICUserConfig;

    /**
     * @param boolean $IsCreateMember <p>是否创建的成员。true-是、false-否；成员不是创建的成员不允许删除</p>
     * @param boolean $DeletionPermission <p>成员删除许可。true-开启、false-关闭；成员删除许可关闭时不允许删除</p>
     * @param boolean $IsAssignManager <p>是否可信服务委派管理员。true-是、false-否；成员是可信服务委派管理员不允许删除</p>
     * @param boolean $IsAuthManager <p>是否主体管理员。true-是、false-否；成员是主体管理员不允许删除</p>
     * @param boolean $IsShareManager <p>是否共享资源管理员。true-是、false-否；成员是共享资源管理员不允许删除</p>
     * @param boolean $OperateProcess <p>成员是否设置了操作审批。true-是、false-否；成员设置了操作审批时不允许删除</p>
     * @param boolean $BillingPermission <p>是否允许解除成员财务权限。true-是、false-否；成员不能解除财务权限时不允许删除</p>
     * @param array $ExistResources <p>存在的资源列表。账号存在资源时不允许删除</p>
     * @param array $DetectFailedResources <p>检测失败的资源列表。账号有资源检测失败时不允许删除。</p>
     * @param boolean $CICRoleConfig <p>是否部署身份中心权限。部署权限不允许删除</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     * @param boolean $CICUserConfig <p>是否同步身份中心用户。同步用户不允许删除</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
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
        if (array_key_exists("IsCreateMember",$param) and $param["IsCreateMember"] !== null) {
            $this->IsCreateMember = $param["IsCreateMember"];
        }

        if (array_key_exists("DeletionPermission",$param) and $param["DeletionPermission"] !== null) {
            $this->DeletionPermission = $param["DeletionPermission"];
        }

        if (array_key_exists("IsAssignManager",$param) and $param["IsAssignManager"] !== null) {
            $this->IsAssignManager = $param["IsAssignManager"];
        }

        if (array_key_exists("IsAuthManager",$param) and $param["IsAuthManager"] !== null) {
            $this->IsAuthManager = $param["IsAuthManager"];
        }

        if (array_key_exists("IsShareManager",$param) and $param["IsShareManager"] !== null) {
            $this->IsShareManager = $param["IsShareManager"];
        }

        if (array_key_exists("OperateProcess",$param) and $param["OperateProcess"] !== null) {
            $this->OperateProcess = $param["OperateProcess"];
        }

        if (array_key_exists("BillingPermission",$param) and $param["BillingPermission"] !== null) {
            $this->BillingPermission = $param["BillingPermission"];
        }

        if (array_key_exists("ExistResources",$param) and $param["ExistResources"] !== null) {
            $this->ExistResources = $param["ExistResources"];
        }

        if (array_key_exists("DetectFailedResources",$param) and $param["DetectFailedResources"] !== null) {
            $this->DetectFailedResources = $param["DetectFailedResources"];
        }

        if (array_key_exists("CICRoleConfig",$param) and $param["CICRoleConfig"] !== null) {
            $this->CICRoleConfig = $param["CICRoleConfig"];
        }

        if (array_key_exists("CICUserConfig",$param) and $param["CICUserConfig"] !== null) {
            $this->CICUserConfig = $param["CICUserConfig"];
        }
    }
}
