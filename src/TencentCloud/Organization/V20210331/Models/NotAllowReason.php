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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 不允许删除的原因。
 *
 * @method boolean getIsCreateMember() 获取是否创建的成员。true-是、false-否；成员不是创建的成员不允许删除
 * @method void setIsCreateMember(boolean $IsCreateMember) 设置是否创建的成员。true-是、false-否；成员不是创建的成员不允许删除
 * @method boolean getDeletionPermission() 获取成员删除许可。true-开启、false-关闭；成员删除许可关闭时不允许删除
 * @method void setDeletionPermission(boolean $DeletionPermission) 设置成员删除许可。true-开启、false-关闭；成员删除许可关闭时不允许删除
 * @method boolean getIsAssignManager() 获取是否可信服务委派管理员。true-是、false-否；成员是可信服务委派管理员不允许删除
 * @method void setIsAssignManager(boolean $IsAssignManager) 设置是否可信服务委派管理员。true-是、false-否；成员是可信服务委派管理员不允许删除
 * @method boolean getIsAuthManager() 获取是否主体管理员。true-是、false-否；成员是主体管理员不允许删除
 * @method void setIsAuthManager(boolean $IsAuthManager) 设置是否主体管理员。true-是、false-否；成员是主体管理员不允许删除
 * @method boolean getIsShareManager() 获取是否共享资源管理员。true-是、false-否；成员是共享资源管理员不允许删除
 * @method void setIsShareManager(boolean $IsShareManager) 设置是否共享资源管理员。true-是、false-否；成员是共享资源管理员不允许删除
 * @method boolean getOperateProcess() 获取成员是否设置了操作审批。true-是、false-否；成员设置了操作审批时不允许删除
 * @method void setOperateProcess(boolean $OperateProcess) 设置成员是否设置了操作审批。true-是、false-否；成员设置了操作审批时不允许删除
 * @method boolean getBillingPermission() 获取是否允许解除成员财务权限。true-是、false-否；成员不能解除财务权限时不允许删除
 * @method void setBillingPermission(boolean $BillingPermission) 设置是否允许解除成员财务权限。true-是、false-否；成员不能解除财务权限时不允许删除
 * @method array getExistResources() 获取存在的资源列表。账号存在资源时不允许删除
 * @method void setExistResources(array $ExistResources) 设置存在的资源列表。账号存在资源时不允许删除
 * @method array getDetectFailedResources() 获取检测失败的资源列表。账号有资源检测失败时不允许删除。
 * @method void setDetectFailedResources(array $DetectFailedResources) 设置检测失败的资源列表。账号有资源检测失败时不允许删除。
 */
class NotAllowReason extends AbstractModel
{
    /**
     * @var boolean 是否创建的成员。true-是、false-否；成员不是创建的成员不允许删除
     */
    public $IsCreateMember;

    /**
     * @var boolean 成员删除许可。true-开启、false-关闭；成员删除许可关闭时不允许删除
     */
    public $DeletionPermission;

    /**
     * @var boolean 是否可信服务委派管理员。true-是、false-否；成员是可信服务委派管理员不允许删除
     */
    public $IsAssignManager;

    /**
     * @var boolean 是否主体管理员。true-是、false-否；成员是主体管理员不允许删除
     */
    public $IsAuthManager;

    /**
     * @var boolean 是否共享资源管理员。true-是、false-否；成员是共享资源管理员不允许删除
     */
    public $IsShareManager;

    /**
     * @var boolean 成员是否设置了操作审批。true-是、false-否；成员设置了操作审批时不允许删除
     */
    public $OperateProcess;

    /**
     * @var boolean 是否允许解除成员财务权限。true-是、false-否；成员不能解除财务权限时不允许删除
     */
    public $BillingPermission;

    /**
     * @var array 存在的资源列表。账号存在资源时不允许删除
     */
    public $ExistResources;

    /**
     * @var array 检测失败的资源列表。账号有资源检测失败时不允许删除。
     */
    public $DetectFailedResources;

    /**
     * @param boolean $IsCreateMember 是否创建的成员。true-是、false-否；成员不是创建的成员不允许删除
     * @param boolean $DeletionPermission 成员删除许可。true-开启、false-关闭；成员删除许可关闭时不允许删除
     * @param boolean $IsAssignManager 是否可信服务委派管理员。true-是、false-否；成员是可信服务委派管理员不允许删除
     * @param boolean $IsAuthManager 是否主体管理员。true-是、false-否；成员是主体管理员不允许删除
     * @param boolean $IsShareManager 是否共享资源管理员。true-是、false-否；成员是共享资源管理员不允许删除
     * @param boolean $OperateProcess 成员是否设置了操作审批。true-是、false-否；成员设置了操作审批时不允许删除
     * @param boolean $BillingPermission 是否允许解除成员财务权限。true-是、false-否；成员不能解除财务权限时不允许删除
     * @param array $ExistResources 存在的资源列表。账号存在资源时不允许删除
     * @param array $DetectFailedResources 检测失败的资源列表。账号有资源检测失败时不允许删除。
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
    }
}
