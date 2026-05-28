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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosObjectScanTask请求参数结构体
 *
 * @method integer getTaskType() 获取<p>1: 敏感数据识别 2:恶意文件扫描 3:批量扫描敏感数据</p>
 * @method void setTaskType(integer $TaskType) 设置<p>1: 敏感数据识别 2:恶意文件扫描 3:批量扫描敏感数据</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getBucketSet() 获取<p>存储桶列表</p>
 * @method void setBucketSet(array $BucketSet) 设置<p>存储桶列表</p>
 * @method string getTaskArgs() 获取<p>任务参数</p>
 * @method void setTaskArgs(string $TaskArgs) 设置<p>任务参数</p>
 * @method boolean getIsScanAll() 获取<p>是否全部扫描</p>
 * @method void setIsScanAll(boolean $IsScanAll) 设置<p>是否全部扫描</p>
 * @method array getDeleteBucketSet() 获取<p>扫描时需要剔除的存储桶</p>
 * @method void setDeleteBucketSet(array $DeleteBucketSet) 设置<p>扫描时需要剔除的存储桶</p>
 */
class CreateCosObjectScanTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>1: 敏感数据识别 2:恶意文件扫描 3:批量扫描敏感数据</p>
     */
    public $TaskType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>存储桶列表</p>
     */
    public $BucketSet;

    /**
     * @var string <p>任务参数</p>
     */
    public $TaskArgs;

    /**
     * @var boolean <p>是否全部扫描</p>
     */
    public $IsScanAll;

    /**
     * @var array <p>扫描时需要剔除的存储桶</p>
     */
    public $DeleteBucketSet;

    /**
     * @param integer $TaskType <p>1: 敏感数据识别 2:恶意文件扫描 3:批量扫描敏感数据</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $BucketSet <p>存储桶列表</p>
     * @param string $TaskArgs <p>任务参数</p>
     * @param boolean $IsScanAll <p>是否全部扫描</p>
     * @param array $DeleteBucketSet <p>扫描时需要剔除的存储桶</p>
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("BucketSet",$param) and $param["BucketSet"] !== null) {
            $this->BucketSet = $param["BucketSet"];
        }

        if (array_key_exists("TaskArgs",$param) and $param["TaskArgs"] !== null) {
            $this->TaskArgs = $param["TaskArgs"];
        }

        if (array_key_exists("IsScanAll",$param) and $param["IsScanAll"] !== null) {
            $this->IsScanAll = $param["IsScanAll"];
        }

        if (array_key_exists("DeleteBucketSet",$param) and $param["DeleteBucketSet"] !== null) {
            $this->DeleteBucketSet = $param["DeleteBucketSet"];
        }
    }
}
