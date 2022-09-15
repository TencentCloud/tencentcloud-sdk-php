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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProject请求参数结构体
 *
 * @method string getProjectId() 获取项目id。一般使用项目Id来查询，与projectName必须存在一个。
 * @method void setProjectId(string $ProjectId) 设置项目id。一般使用项目Id来查询，与projectName必须存在一个。
 * @method boolean getDescribeClusters() 获取是否展示关联集群信息
 * @method void setDescribeClusters(boolean $DescribeClusters) 设置是否展示关联集群信息
 * @method boolean getDescribeExecutors() 获取是否展示关联执行组的信息，仅部分信息。
 * @method void setDescribeExecutors(boolean $DescribeExecutors) 设置是否展示关联执行组的信息，仅部分信息。
 * @method boolean getDescribeAdminUsers() 获取默认不展示项目管理员信息
 * @method void setDescribeAdminUsers(boolean $DescribeAdminUsers) 设置默认不展示项目管理员信息
 * @method boolean getDescribeMemberCount() 获取默认不统计项目人员数量
 * @method void setDescribeMemberCount(boolean $DescribeMemberCount) 设置默认不统计项目人员数量
 * @method boolean getDescribeCreator() 获取默认不查询创建者的信息
 * @method void setDescribeCreator(boolean $DescribeCreator) 设置默认不查询创建者的信息
 * @method string getProjectName() 获取项目名只在租户内唯一，一般用来转化为项目ID。
 * @method void setProjectName(string $ProjectName) 设置项目名只在租户内唯一，一般用来转化为项目ID。
 */
class DescribeProjectRequest extends AbstractModel
{
    /**
     * @var string 项目id。一般使用项目Id来查询，与projectName必须存在一个。
     */
    public $ProjectId;

    /**
     * @var boolean 是否展示关联集群信息
     */
    public $DescribeClusters;

    /**
     * @var boolean 是否展示关联执行组的信息，仅部分信息。
     */
    public $DescribeExecutors;

    /**
     * @var boolean 默认不展示项目管理员信息
     */
    public $DescribeAdminUsers;

    /**
     * @var boolean 默认不统计项目人员数量
     */
    public $DescribeMemberCount;

    /**
     * @var boolean 默认不查询创建者的信息
     */
    public $DescribeCreator;

    /**
     * @var string 项目名只在租户内唯一，一般用来转化为项目ID。
     */
    public $ProjectName;

    /**
     * @param string $ProjectId 项目id。一般使用项目Id来查询，与projectName必须存在一个。
     * @param boolean $DescribeClusters 是否展示关联集群信息
     * @param boolean $DescribeExecutors 是否展示关联执行组的信息，仅部分信息。
     * @param boolean $DescribeAdminUsers 默认不展示项目管理员信息
     * @param boolean $DescribeMemberCount 默认不统计项目人员数量
     * @param boolean $DescribeCreator 默认不查询创建者的信息
     * @param string $ProjectName 项目名只在租户内唯一，一般用来转化为项目ID。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DescribeClusters",$param) and $param["DescribeClusters"] !== null) {
            $this->DescribeClusters = $param["DescribeClusters"];
        }

        if (array_key_exists("DescribeExecutors",$param) and $param["DescribeExecutors"] !== null) {
            $this->DescribeExecutors = $param["DescribeExecutors"];
        }

        if (array_key_exists("DescribeAdminUsers",$param) and $param["DescribeAdminUsers"] !== null) {
            $this->DescribeAdminUsers = $param["DescribeAdminUsers"];
        }

        if (array_key_exists("DescribeMemberCount",$param) and $param["DescribeMemberCount"] !== null) {
            $this->DescribeMemberCount = $param["DescribeMemberCount"];
        }

        if (array_key_exists("DescribeCreator",$param) and $param["DescribeCreator"] !== null) {
            $this->DescribeCreator = $param["DescribeCreator"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
