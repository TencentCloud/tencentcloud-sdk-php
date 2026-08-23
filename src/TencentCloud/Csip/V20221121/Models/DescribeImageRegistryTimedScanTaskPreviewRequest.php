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
 * DescribeImageRegistryTimedScanTaskPreview请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method Filter getFilter() 获取<p>筛选项</p>
 * @method void setFilter(Filter $Filter) 设置<p>筛选项</p>
 * @method integer getTaskId() 获取<p>定时任务配置Id</p>
 * @method void setTaskId(integer $TaskId) 设置<p>定时任务配置Id</p>
 * @method string getTargetType() 获取<p>预览类型</p>
 * @method void setTargetType(string $TargetType) 设置<p>预览类型</p>
 */
class DescribeImageRegistryTimedScanTaskPreviewRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>筛选项</p>
     */
    public $Filter;

    /**
     * @var integer <p>定时任务配置Id</p>
     */
    public $TaskId;

    /**
     * @var string <p>预览类型</p>
     */
    public $TargetType;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param Filter $Filter <p>筛选项</p>
     * @param integer $TaskId <p>定时任务配置Id</p>
     * @param string $TargetType <p>预览类型</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }
    }
}
