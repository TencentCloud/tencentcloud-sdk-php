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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateJob请求参数结构体
 *
 * @method string getName() 获取作业名称，允许输入长度小于等于50个字符的中文、英文、数字、-（横线）、_（下划线）、.（点），且符号必须半角字符。注意作业名不能和现有作业同名
 * @method void setName(string $Name) 设置作业名称，允许输入长度小于等于50个字符的中文、英文、数字、-（横线）、_（下划线）、.（点），且符号必须半角字符。注意作业名不能和现有作业同名
 * @method integer getJobType() 获取作业的类型，1 表示 SQL 作业，2 表示 JAR 作业
 * @method void setJobType(integer $JobType) 设置作业的类型，1 表示 SQL 作业，2 表示 JAR 作业
 * @method integer getClusterType() 获取集群的类型，1 表示共享集群，2 表示独享集群
 * @method void setClusterType(integer $ClusterType) 设置集群的类型，1 表示共享集群，2 表示独享集群
 * @method string getClusterId() 获取当 ClusterType=2 时，必选，用来指定该作业提交的独享集群 ID
 * @method void setClusterId(string $ClusterId) 设置当 ClusterType=2 时，必选，用来指定该作业提交的独享集群 ID
 * @method integer getCuMem() 获取设置每 CU 的内存规格，单位为 GB，支持 2、4、8、16（需申请开通白名单后使用）。默认为 4，即 1 CU 对应 4 GB 的运行内存
 * @method void setCuMem(integer $CuMem) 设置设置每 CU 的内存规格，单位为 GB，支持 2、4、8、16（需申请开通白名单后使用）。默认为 4，即 1 CU 对应 4 GB 的运行内存
 * @method string getRemark() 获取作业的备注信息，可以随意设置
 * @method void setRemark(string $Remark) 设置作业的备注信息，可以随意设置
 * @method string getFolderId() 获取作业名所属文件夹ID，根目录为"root"
 * @method void setFolderId(string $FolderId) 设置作业名所属文件夹ID，根目录为"root"
 * @method string getFlinkVersion() 获取作业运行的Flink版本
 * @method void setFlinkVersion(string $FlinkVersion) 设置作业运行的Flink版本
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class CreateJobRequest extends AbstractModel
{
    /**
     * @var string 作业名称，允许输入长度小于等于50个字符的中文、英文、数字、-（横线）、_（下划线）、.（点），且符号必须半角字符。注意作业名不能和现有作业同名
     */
    public $Name;

    /**
     * @var integer 作业的类型，1 表示 SQL 作业，2 表示 JAR 作业
     */
    public $JobType;

    /**
     * @var integer 集群的类型，1 表示共享集群，2 表示独享集群
     */
    public $ClusterType;

    /**
     * @var string 当 ClusterType=2 时，必选，用来指定该作业提交的独享集群 ID
     */
    public $ClusterId;

    /**
     * @var integer 设置每 CU 的内存规格，单位为 GB，支持 2、4、8、16（需申请开通白名单后使用）。默认为 4，即 1 CU 对应 4 GB 的运行内存
     */
    public $CuMem;

    /**
     * @var string 作业的备注信息，可以随意设置
     */
    public $Remark;

    /**
     * @var string 作业名所属文件夹ID，根目录为"root"
     */
    public $FolderId;

    /**
     * @var string 作业运行的Flink版本
     */
    public $FlinkVersion;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param string $Name 作业名称，允许输入长度小于等于50个字符的中文、英文、数字、-（横线）、_（下划线）、.（点），且符号必须半角字符。注意作业名不能和现有作业同名
     * @param integer $JobType 作业的类型，1 表示 SQL 作业，2 表示 JAR 作业
     * @param integer $ClusterType 集群的类型，1 表示共享集群，2 表示独享集群
     * @param string $ClusterId 当 ClusterType=2 时，必选，用来指定该作业提交的独享集群 ID
     * @param integer $CuMem 设置每 CU 的内存规格，单位为 GB，支持 2、4、8、16（需申请开通白名单后使用）。默认为 4，即 1 CU 对应 4 GB 的运行内存
     * @param string $Remark 作业的备注信息，可以随意设置
     * @param string $FolderId 作业名所属文件夹ID，根目录为"root"
     * @param string $FlinkVersion 作业运行的Flink版本
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CuMem",$param) and $param["CuMem"] !== null) {
            $this->CuMem = $param["CuMem"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FlinkVersion",$param) and $param["FlinkVersion"] !== null) {
            $this->FlinkVersion = $param["FlinkVersion"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
