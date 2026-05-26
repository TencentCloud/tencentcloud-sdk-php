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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分析引擎关联关系
 *
 * @method string getPrimaryInstanceId() 获取<p>源实例Id</p>
 * @method void setPrimaryInstanceId(string $PrimaryInstanceId) 设置<p>源实例Id</p>
 * @method string getAnalysisInstanceId() 获取<p>分析引擎实例Id</p>
 * @method void setAnalysisInstanceId(string $AnalysisInstanceId) 设置<p>分析引擎实例Id</p>
 * @method string getStatus() 获取<p>分析引擎关系状态</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>running： 运行中</li><li>destroyed： 已销毁</li></ul>
 * @method void setStatus(string $Status) 设置<p>分析引擎关系状态</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>running： 运行中</li><li>destroyed： 已销毁</li></ul>
 * @method string getCreateAt() 获取<p>创建时间</p>
 * @method void setCreateAt(string $CreateAt) 设置<p>创建时间</p>
 * @method string getUpdateAt() 获取<p>更新时间</p>
 * @method void setUpdateAt(string $UpdateAt) 设置<p>更新时间</p>
 */
class AnalysisRelationInfo extends AbstractModel
{
    /**
     * @var string <p>源实例Id</p>
     */
    public $PrimaryInstanceId;

    /**
     * @var string <p>分析引擎实例Id</p>
     */
    public $AnalysisInstanceId;

    /**
     * @var string <p>分析引擎关系状态</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>running： 运行中</li><li>destroyed： 已销毁</li></ul>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateAt;

    /**
     * @param string $PrimaryInstanceId <p>源实例Id</p>
     * @param string $AnalysisInstanceId <p>分析引擎实例Id</p>
     * @param string $Status <p>分析引擎关系状态</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>running： 运行中</li><li>destroyed： 已销毁</li></ul>
     * @param string $CreateAt <p>创建时间</p>
     * @param string $UpdateAt <p>更新时间</p>
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
        if (array_key_exists("PrimaryInstanceId",$param) and $param["PrimaryInstanceId"] !== null) {
            $this->PrimaryInstanceId = $param["PrimaryInstanceId"];
        }

        if (array_key_exists("AnalysisInstanceId",$param) and $param["AnalysisInstanceId"] !== null) {
            $this->AnalysisInstanceId = $param["AnalysisInstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
