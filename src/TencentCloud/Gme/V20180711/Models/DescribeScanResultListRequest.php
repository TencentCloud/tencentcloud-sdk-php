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
 * @method integer getBizId() 获取应用 ID，在控制台统一创建。
 * @method void setBizId(integer $BizId) 设置应用 ID，在控制台统一创建。
 * @method array getTaskIdList() 获取查询的任务 ID 列表，任务 ID 列表最多支持 100 个。
 * @method void setTaskIdList(array $TaskIdList) 设置查询的任务 ID 列表，任务 ID 列表最多支持 100 个。
 */

/**
 *DescribeScanResultList请求参数结构体
 */
class DescribeScanResultListRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID，在控制台统一创建。
     */
    public $BizId;

    /**
     * @var array 查询的任务 ID 列表，任务 ID 列表最多支持 100 个。
     */
    public $TaskIdList;
    /**
     * @param integer $BizId 应用 ID，在控制台统一创建。
     * @param array $TaskIdList 查询的任务 ID 列表，任务 ID 列表最多支持 100 个。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }
    }
}
