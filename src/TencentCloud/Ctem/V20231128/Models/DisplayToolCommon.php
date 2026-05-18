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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据管理公共字段
 *
 * @method string getEnterpriseUid() 获取<p>子公司ID</p>
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置<p>子公司ID</p>
 * @method string getEnterpriseName() 获取<p>子公司名称</p>
 * @method void setEnterpriseName(string $EnterpriseName) 设置<p>子公司名称</p>
 * @method integer getJobId() 获取<p>主任务ID</p>
 * @method void setJobId(integer $JobId) 设置<p>主任务ID</p>
 * @method integer getJobStageId() 获取<p>单任务ID</p>
 * @method void setJobStageId(integer $JobStageId) 设置<p>单任务ID</p>
 * @method boolean getIgnored() 获取<p>是否忽略</p>
 * @method void setIgnored(boolean $Ignored) 设置<p>是否忽略</p>
 * @method integer getJobRecordId() 获取<p>子任务ID</p>
 * @method void setJobRecordId(integer $JobRecordId) 设置<p>子任务ID</p>
 * @method integer getCustomerId() 获取<p>企业ID</p>
 * @method void setCustomerId(integer $CustomerId) 设置<p>企业ID</p>
 * @method string getCustomerName() 获取<p>企业名称</p>
 * @method void setCustomerName(string $CustomerName) 设置<p>企业名称</p>
 * @method string getDetail() 获取<p>详情</p>
 * @method void setDetail(string $Detail) 设置<p>详情</p>
 * @method string getMd5() 获取<p>Md5值</p>
 * @method void setMd5(string $Md5) 设置<p>Md5值</p>
 * @method string getCreateAt() 获取<p>创建时间</p>
 * @method void setCreateAt(string $CreateAt) 设置<p>创建时间</p>
 * @method string getUpdateAt() 获取<p>更新时间</p>
 * @method void setUpdateAt(string $UpdateAt) 设置<p>更新时间</p>
 * @method string getLabels() 获取<p>标签列表，json格式：{"tag1":["责任人xxx"],"tag2":["测试站"]}</p>
 * @method void setLabels(string $Labels) 设置<p>标签列表，json格式：{"tag1":["责任人xxx"],"tag2":["测试站"]}</p>
 * @method integer getIsPlainTextInDemo() 获取<p>演示模式是否明文展示</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
 * @method void setIsPlainTextInDemo(integer $IsPlainTextInDemo) 设置<p>演示模式是否明文展示</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
 */
class DisplayToolCommon extends AbstractModel
{
    /**
     * @var string <p>子公司ID</p>
     */
    public $EnterpriseUid;

    /**
     * @var string <p>子公司名称</p>
     */
    public $EnterpriseName;

    /**
     * @var integer <p>主任务ID</p>
     */
    public $JobId;

    /**
     * @var integer <p>单任务ID</p>
     */
    public $JobStageId;

    /**
     * @var boolean <p>是否忽略</p>
     */
    public $Ignored;

    /**
     * @var integer <p>子任务ID</p>
     */
    public $JobRecordId;

    /**
     * @var integer <p>企业ID</p>
     */
    public $CustomerId;

    /**
     * @var string <p>企业名称</p>
     */
    public $CustomerName;

    /**
     * @var string <p>详情</p>
     */
    public $Detail;

    /**
     * @var string <p>Md5值</p>
     */
    public $Md5;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateAt;

    /**
     * @var string <p>标签列表，json格式：{"tag1":["责任人xxx"],"tag2":["测试站"]}</p>
     */
    public $Labels;

    /**
     * @var integer <p>演示模式是否明文展示</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
     */
    public $IsPlainTextInDemo;

    /**
     * @param string $EnterpriseUid <p>子公司ID</p>
     * @param string $EnterpriseName <p>子公司名称</p>
     * @param integer $JobId <p>主任务ID</p>
     * @param integer $JobStageId <p>单任务ID</p>
     * @param boolean $Ignored <p>是否忽略</p>
     * @param integer $JobRecordId <p>子任务ID</p>
     * @param integer $CustomerId <p>企业ID</p>
     * @param string $CustomerName <p>企业名称</p>
     * @param string $Detail <p>详情</p>
     * @param string $Md5 <p>Md5值</p>
     * @param string $CreateAt <p>创建时间</p>
     * @param string $UpdateAt <p>更新时间</p>
     * @param string $Labels <p>标签列表，json格式：{"tag1":["责任人xxx"],"tag2":["测试站"]}</p>
     * @param integer $IsPlainTextInDemo <p>演示模式是否明文展示</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
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
        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }

        if (array_key_exists("EnterpriseName",$param) and $param["EnterpriseName"] !== null) {
            $this->EnterpriseName = $param["EnterpriseName"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobStageId",$param) and $param["JobStageId"] !== null) {
            $this->JobStageId = $param["JobStageId"];
        }

        if (array_key_exists("Ignored",$param) and $param["Ignored"] !== null) {
            $this->Ignored = $param["Ignored"];
        }

        if (array_key_exists("JobRecordId",$param) and $param["JobRecordId"] !== null) {
            $this->JobRecordId = $param["JobRecordId"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("IsPlainTextInDemo",$param) and $param["IsPlainTextInDemo"] !== null) {
            $this->IsPlainTextInDemo = $param["IsPlainTextInDemo"];
        }
    }
}
