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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentAuditedClients请求参数结构体
 *
 * @method string getClientUin() 获取客户账号ID
 * @method void setClientUin(string $ClientUin) 设置客户账号ID
 * @method string getClientName() 获取客户名称。由于涉及隐私，名称打码显示，故名称仅支持打码后的模糊搜索
 * @method void setClientName(string $ClientName) 设置客户名称。由于涉及隐私，名称打码显示，故名称仅支持打码后的模糊搜索
 * @method string getClientFlag() 获取客户类型，a/b，类型定义参考代理商相关政策文档
 * @method void setClientFlag(string $ClientFlag) 设置客户类型，a/b，类型定义参考代理商相关政策文档
 * @method string getOrderDirection() 获取ASC/DESC， 不区分大小写，按审核通过时间排序
 * @method void setOrderDirection(string $OrderDirection) 设置ASC/DESC， 不区分大小写，按审核通过时间排序
 * @method array getClientUins() 获取客户账号ID列表
 * @method void setClientUins(array $ClientUins) 设置客户账号ID列表
 * @method integer getHasOverdueBill() 获取是否欠费。0：不欠费；1：欠费
 * @method void setHasOverdueBill(integer $HasOverdueBill) 设置是否欠费。0：不欠费；1：欠费
 * @method string getClientRemark() 获取客户备注
 * @method void setClientRemark(string $ClientRemark) 设置客户备注
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method string getClientType() 获取可以为new(自拓)/assign(指派)/old(官网)/direct(直销)/direct_newopp(直销(新商机))/空
 * @method void setClientType(string $ClientType) 设置可以为new(自拓)/assign(指派)/old(官网)/direct(直销)/direct_newopp(直销(新商机))/空
 * @method string getProjectType() 获取项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
 * @method void setProjectType(string $ProjectType) 设置项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
 * @method string getSalesUin() 获取业务员ID
 * @method void setSalesUin(string $SalesUin) 设置业务员ID
 * @method string getSalesName() 获取业务员姓名（模糊查询）
 * @method void setSalesName(string $SalesName) 设置业务员姓名（模糊查询）
 */
class DescribeAgentAuditedClientsRequest extends AbstractModel
{
    /**
     * @var string 客户账号ID
     */
    public $ClientUin;

    /**
     * @var string 客户名称。由于涉及隐私，名称打码显示，故名称仅支持打码后的模糊搜索
     */
    public $ClientName;

    /**
     * @var string 客户类型，a/b，类型定义参考代理商相关政策文档
     */
    public $ClientFlag;

    /**
     * @var string ASC/DESC， 不区分大小写，按审核通过时间排序
     */
    public $OrderDirection;

    /**
     * @var array 客户账号ID列表
     */
    public $ClientUins;

    /**
     * @var integer 是否欠费。0：不欠费；1：欠费
     */
    public $HasOverdueBill;

    /**
     * @var string 客户备注
     */
    public $ClientRemark;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var string 可以为new(自拓)/assign(指派)/old(官网)/direct(直销)/direct_newopp(直销(新商机))/空
     */
    public $ClientType;

    /**
     * @var string 项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
     */
    public $ProjectType;

    /**
     * @var string 业务员ID
     */
    public $SalesUin;

    /**
     * @var string 业务员姓名（模糊查询）
     */
    public $SalesName;

    /**
     * @param string $ClientUin 客户账号ID
     * @param string $ClientName 客户名称。由于涉及隐私，名称打码显示，故名称仅支持打码后的模糊搜索
     * @param string $ClientFlag 客户类型，a/b，类型定义参考代理商相关政策文档
     * @param string $OrderDirection ASC/DESC， 不区分大小写，按审核通过时间排序
     * @param array $ClientUins 客户账号ID列表
     * @param integer $HasOverdueBill 是否欠费。0：不欠费；1：欠费
     * @param string $ClientRemark 客户备注
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数目
     * @param string $ClientType 可以为new(自拓)/assign(指派)/old(官网)/direct(直销)/direct_newopp(直销(新商机))/空
     * @param string $ProjectType 项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
     * @param string $SalesUin 业务员ID
     * @param string $SalesName 业务员姓名（模糊查询）
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("ClientName",$param) and $param["ClientName"] !== null) {
            $this->ClientName = $param["ClientName"];
        }

        if (array_key_exists("ClientFlag",$param) and $param["ClientFlag"] !== null) {
            $this->ClientFlag = $param["ClientFlag"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("ClientUins",$param) and $param["ClientUins"] !== null) {
            $this->ClientUins = $param["ClientUins"];
        }

        if (array_key_exists("HasOverdueBill",$param) and $param["HasOverdueBill"] !== null) {
            $this->HasOverdueBill = $param["HasOverdueBill"];
        }

        if (array_key_exists("ClientRemark",$param) and $param["ClientRemark"] !== null) {
            $this->ClientRemark = $param["ClientRemark"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("ProjectType",$param) and $param["ProjectType"] !== null) {
            $this->ProjectType = $param["ProjectType"];
        }

        if (array_key_exists("SalesUin",$param) and $param["SalesUin"] !== null) {
            $this->SalesUin = $param["SalesUin"];
        }

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }
    }
}
