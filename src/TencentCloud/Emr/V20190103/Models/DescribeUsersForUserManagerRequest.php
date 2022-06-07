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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsersForUserManager请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取分页的大小
 * @method void setPageSize(integer $PageSize) 设置分页的大小
 * @method UserManagerFilter getUserManagerFilter() 获取查询用户列表过滤器
 * @method void setUserManagerFilter(UserManagerFilter $UserManagerFilter) 设置查询用户列表过滤器
 * @method boolean getNeedKeytabInfo() 获取是否需要keytab文件的信息，仅对开启kerberos的集群有效，默认为false
 * @method void setNeedKeytabInfo(boolean $NeedKeytabInfo) 设置是否需要keytab文件的信息，仅对开启kerberos的集群有效，默认为false
 */
class DescribeUsersForUserManagerRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 分页的大小
     */
    public $PageSize;

    /**
     * @var UserManagerFilter 查询用户列表过滤器
     */
    public $UserManagerFilter;

    /**
     * @var boolean 是否需要keytab文件的信息，仅对开启kerberos的集群有效，默认为false
     */
    public $NeedKeytabInfo;

    /**
     * @param string $InstanceId 集群实例ID
     * @param integer $PageNo 页码
     * @param integer $PageSize 分页的大小
     * @param UserManagerFilter $UserManagerFilter 查询用户列表过滤器
     * @param boolean $NeedKeytabInfo 是否需要keytab文件的信息，仅对开启kerberos的集群有效，默认为false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("UserManagerFilter",$param) and $param["UserManagerFilter"] !== null) {
            $this->UserManagerFilter = new UserManagerFilter();
            $this->UserManagerFilter->deserialize($param["UserManagerFilter"]);
        }

        if (array_key_exists("NeedKeytabInfo",$param) and $param["NeedKeytabInfo"] !== null) {
            $this->NeedKeytabInfo = $param["NeedKeytabInfo"];
        }
    }
}
