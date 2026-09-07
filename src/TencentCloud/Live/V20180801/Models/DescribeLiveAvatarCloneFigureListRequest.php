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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveAvatarCloneFigureList请求参数结构体
 *
 * @method string getTaskId() 获取<p>待查询的克隆形象的TaskId</p>
 * @method void setTaskId(string $TaskId) 设置<p>待查询的克隆形象的TaskId</p>
 * @method string getStatus() 获取<p>根据状态查询克隆形象</p><p>枚举值：</p><ul><li>SUBMITTING： 已受理</li><li>CHECKING： 检查中</li><li>QUEUE： 排队中</li><li>MAKING： 训练中</li><li>CONFIRMING： 效果确认</li><li>SUCCESS： 成功</li><li>FAIL： 失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>根据状态查询克隆形象</p><p>枚举值：</p><ul><li>SUBMITTING： 已受理</li><li>CHECKING： 检查中</li><li>QUEUE： 排队中</li><li>MAKING： 训练中</li><li>CONFIRMING： 效果确认</li><li>SUCCESS： 成功</li><li>FAIL： 失败</li></ul>
 * @method string getLimit() 获取<p>期望返回克隆形象的个数（最多20个）</p>
 * @method void setLimit(string $Limit) 设置<p>期望返回克隆形象的个数（最多20个）</p>
 * @method string getOffset() 获取<p>期望返回克隆形象的起始偏移位置（默认为0）</p>
 * @method void setOffset(string $Offset) 设置<p>期望返回克隆形象的起始偏移位置（默认为0）</p>
 */
class DescribeLiveAvatarCloneFigureListRequest extends AbstractModel
{
    /**
     * @var string <p>待查询的克隆形象的TaskId</p>
     */
    public $TaskId;

    /**
     * @var string <p>根据状态查询克隆形象</p><p>枚举值：</p><ul><li>SUBMITTING： 已受理</li><li>CHECKING： 检查中</li><li>QUEUE： 排队中</li><li>MAKING： 训练中</li><li>CONFIRMING： 效果确认</li><li>SUCCESS： 成功</li><li>FAIL： 失败</li></ul>
     */
    public $Status;

    /**
     * @var string <p>期望返回克隆形象的个数（最多20个）</p>
     */
    public $Limit;

    /**
     * @var string <p>期望返回克隆形象的起始偏移位置（默认为0）</p>
     */
    public $Offset;

    /**
     * @param string $TaskId <p>待查询的克隆形象的TaskId</p>
     * @param string $Status <p>根据状态查询克隆形象</p><p>枚举值：</p><ul><li>SUBMITTING： 已受理</li><li>CHECKING： 检查中</li><li>QUEUE： 排队中</li><li>MAKING： 训练中</li><li>CONFIRMING： 效果确认</li><li>SUCCESS： 成功</li><li>FAIL： 失败</li></ul>
     * @param string $Limit <p>期望返回克隆形象的个数（最多20个）</p>
     * @param string $Offset <p>期望返回克隆形象的起始偏移位置（默认为0）</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
