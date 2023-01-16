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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgeDetectTask请求参数结构体
 *
 * @method integer getBizId() 获取应用id
 * @method void setBizId(integer $BizId) 设置应用id
 * @method string getTaskId() 获取[创建年龄语音识别任务](https://cloud.tencent.com/document/product/607/60620)时返回的taskid
 * @method void setTaskId(string $TaskId) 设置[创建年龄语音识别任务](https://cloud.tencent.com/document/product/607/60620)时返回的taskid
 */
class DescribeAgeDetectTaskRequest extends AbstractModel
{
    /**
     * @var integer 应用id
     */
    public $BizId;

    /**
     * @var string [创建年龄语音识别任务](https://cloud.tencent.com/document/product/607/60620)时返回的taskid
     */
    public $TaskId;

    /**
     * @param integer $BizId 应用id
     * @param string $TaskId [创建年龄语音识别任务](https://cloud.tencent.com/document/product/607/60620)时返回的taskid
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
