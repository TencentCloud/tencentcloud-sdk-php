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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据管理公共字段
 *
 * @method string getEnterpriseUid() 获取子公司ID
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司ID
 * @method string getEnterpriseName() 获取子公司名称
 * @method void setEnterpriseName(string $EnterpriseName) 设置子公司名称
 * @method integer getJobId() 获取主任务ID
 * @method void setJobId(integer $JobId) 设置主任务ID
 * @method integer getJobStageId() 获取单任务ID
 * @method void setJobStageId(integer $JobStageId) 设置单任务ID
 * @method boolean getIgnored() 获取是否忽略
 * @method void setIgnored(boolean $Ignored) 设置是否忽略
 * @method integer getJobRecordId() 获取子任务ID
 * @method void setJobRecordId(integer $JobRecordId) 设置子任务ID
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method string getCustomerName() 获取企业名称
 * @method void setCustomerName(string $CustomerName) 设置企业名称
 * @method string getDetail() 获取详情
 * @method void setDetail(string $Detail) 设置详情
 * @method string getMd5() 获取Md5值
 * @method void setMd5(string $Md5) 设置Md5值
 * @method string getCreateAt() 获取创建时间
 * @method void setCreateAt(string $CreateAt) 设置创建时间
 * @method string getUpdateAt() 获取更新时间
 * @method void setUpdateAt(string $UpdateAt) 设置更新时间
 * @method string getLabels() 获取标签列表，json格式：{\"tag1\":[\"责任人xxx\"],\"tag2\":[\"测试站\"]}
 * @method void setLabels(string $Labels) 设置标签列表，json格式：{\"tag1\":[\"责任人xxx\"],\"tag2\":[\"测试站\"]}
 */
class DisplayToolCommon extends AbstractModel
{
    /**
     * @var string 子公司ID
     */
    public $EnterpriseUid;

    /**
     * @var string 子公司名称
     */
    public $EnterpriseName;

    /**
     * @var integer 主任务ID
     */
    public $JobId;

    /**
     * @var integer 单任务ID
     */
    public $JobStageId;

    /**
     * @var boolean 是否忽略
     */
    public $Ignored;

    /**
     * @var integer 子任务ID
     */
    public $JobRecordId;

    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var string 企业名称
     */
    public $CustomerName;

    /**
     * @var string 详情
     */
    public $Detail;

    /**
     * @var string Md5值
     */
    public $Md5;

    /**
     * @var string 创建时间
     */
    public $CreateAt;

    /**
     * @var string 更新时间
     */
    public $UpdateAt;

    /**
     * @var string 标签列表，json格式：{\"tag1\":[\"责任人xxx\"],\"tag2\":[\"测试站\"]}
     */
    public $Labels;

    /**
     * @param string $EnterpriseUid 子公司ID
     * @param string $EnterpriseName 子公司名称
     * @param integer $JobId 主任务ID
     * @param integer $JobStageId 单任务ID
     * @param boolean $Ignored 是否忽略
     * @param integer $JobRecordId 子任务ID
     * @param integer $CustomerId 企业ID
     * @param string $CustomerName 企业名称
     * @param string $Detail 详情
     * @param string $Md5 Md5值
     * @param string $CreateAt 创建时间
     * @param string $UpdateAt 更新时间
     * @param string $Labels 标签列表，json格式：{\"tag1\":[\"责任人xxx\"],\"tag2\":[\"测试站\"]}
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
    }
}
