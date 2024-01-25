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
 * 代码搜索响应结果
 *
 * @method CodeSearchInfoPage getCodeSearchInfoList() 获取代码搜索结果列表
 * @method void setCodeSearchInfoList(CodeSearchInfoPage $CodeSearchInfoList) 设置代码搜索结果列表
 * @method integer getDevCount() 获取开发空间搜索结果数
 * @method void setDevCount(integer $DevCount) 设置开发空间搜索结果数
 * @method integer getScheduleCount() 获取调度空间搜索结果数
 * @method void setScheduleCount(integer $ScheduleCount) 设置调度空间搜索结果数
 * @method integer getRecycleCount() 获取回收站搜索结果数
 * @method void setRecycleCount(integer $RecycleCount) 设置回收站搜索结果数
 */
class CodeSearchResult extends AbstractModel
{
    /**
     * @var CodeSearchInfoPage 代码搜索结果列表
     */
    public $CodeSearchInfoList;

    /**
     * @var integer 开发空间搜索结果数
     */
    public $DevCount;

    /**
     * @var integer 调度空间搜索结果数
     */
    public $ScheduleCount;

    /**
     * @var integer 回收站搜索结果数
     */
    public $RecycleCount;

    /**
     * @param CodeSearchInfoPage $CodeSearchInfoList 代码搜索结果列表
     * @param integer $DevCount 开发空间搜索结果数
     * @param integer $ScheduleCount 调度空间搜索结果数
     * @param integer $RecycleCount 回收站搜索结果数
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
        if (array_key_exists("CodeSearchInfoList",$param) and $param["CodeSearchInfoList"] !== null) {
            $this->CodeSearchInfoList = new CodeSearchInfoPage();
            $this->CodeSearchInfoList->deserialize($param["CodeSearchInfoList"]);
        }

        if (array_key_exists("DevCount",$param) and $param["DevCount"] !== null) {
            $this->DevCount = $param["DevCount"];
        }

        if (array_key_exists("ScheduleCount",$param) and $param["ScheduleCount"] !== null) {
            $this->ScheduleCount = $param["ScheduleCount"];
        }

        if (array_key_exists("RecycleCount",$param) and $param["RecycleCount"] !== null) {
            $this->RecycleCount = $param["RecycleCount"];
        }
    }
}
