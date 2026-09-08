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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据接入列表行
 *
 * @method string getTaskId() 获取<p>接入任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>接入任务id</p>
 * @method string getName() 获取<p>接入任务名称</p>
 * @method void setName(string $Name) 设置<p>接入任务名称</p>
 * @method string getProduct() 获取<p>产品分组</p>
 * @method void setProduct(string $Product) 设置<p>产品分组</p>
 * @method integer getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>0： 接入中</li><li>1： 已接入</li><li>2： 接入失败</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 删除失败</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>0： 接入中</li><li>1： 已接入</li><li>2： 接入失败</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 删除失败</li></ul>
 * @method integer getCreateTime() 获取<p>接入任务创建时间</p><p>单位：ms</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>接入任务创建时间</p><p>单位：ms</p>
 * @method integer getUpdateTime() 获取<p>接入任务修改时间</p><p>单位：ms</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>接入任务修改时间</p><p>单位：ms</p>
 */
class ProductIngestTaskItem extends AbstractModel
{
    /**
     * @var string <p>接入任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>接入任务名称</p>
     */
    public $Name;

    /**
     * @var string <p>产品分组</p>
     */
    public $Product;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>0： 接入中</li><li>1： 已接入</li><li>2： 接入失败</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 删除失败</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>接入任务创建时间</p><p>单位：ms</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>接入任务修改时间</p><p>单位：ms</p>
     */
    public $UpdateTime;

    /**
     * @param string $TaskId <p>接入任务id</p>
     * @param string $Name <p>接入任务名称</p>
     * @param string $Product <p>产品分组</p>
     * @param integer $Status <p>状态</p><p>枚举值：</p><ul><li>0： 接入中</li><li>1： 已接入</li><li>2： 接入失败</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 删除失败</li></ul>
     * @param integer $CreateTime <p>接入任务创建时间</p><p>单位：ms</p>
     * @param integer $UpdateTime <p>接入任务修改时间</p><p>单位：ms</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
