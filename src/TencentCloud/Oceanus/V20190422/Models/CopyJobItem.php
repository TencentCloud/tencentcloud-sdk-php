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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复制作业单条明细
 *
 * @method string getSourceId() 获取<p>需要复制的作业serial id</p>
 * @method void setSourceId(string $SourceId) 设置<p>需要复制的作业serial id</p>
 * @method string getTargetClusterId() 获取<p>目标集群的cluster serial id</p>
 * @method void setTargetClusterId(string $TargetClusterId) 设置<p>目标集群的cluster serial id</p>
 * @method string getSourceName() 获取<p>需要复制的作业名称</p>
 * @method void setSourceName(string $SourceName) 设置<p>需要复制的作业名称</p>
 * @method string getTargetName() 获取<p>新作业的名称</p>
 * @method void setTargetName(string $TargetName) 设置<p>新作业的名称</p>
 * @method string getTargetFolderId() 获取<p>新作业的目录id</p>
 * @method void setTargetFolderId(string $TargetFolderId) 设置<p>新作业的目录id</p>
 * @method integer getJobType() 获取<p>作业类型</p><p>枚举值：</p><ul><li>1： sql作业</li><li>2： jar作业</li><li>4： python作业</li></ul>
 * @method void setJobType(integer $JobType) 设置<p>作业类型</p><p>枚举值：</p><ul><li>1： sql作业</li><li>2： jar作业</li><li>4： python作业</li></ul>
 */
class CopyJobItem extends AbstractModel
{
    /**
     * @var string <p>需要复制的作业serial id</p>
     */
    public $SourceId;

    /**
     * @var string <p>目标集群的cluster serial id</p>
     */
    public $TargetClusterId;

    /**
     * @var string <p>需要复制的作业名称</p>
     */
    public $SourceName;

    /**
     * @var string <p>新作业的名称</p>
     */
    public $TargetName;

    /**
     * @var string <p>新作业的目录id</p>
     */
    public $TargetFolderId;

    /**
     * @var integer <p>作业类型</p><p>枚举值：</p><ul><li>1： sql作业</li><li>2： jar作业</li><li>4： python作业</li></ul>
     */
    public $JobType;

    /**
     * @param string $SourceId <p>需要复制的作业serial id</p>
     * @param string $TargetClusterId <p>目标集群的cluster serial id</p>
     * @param string $SourceName <p>需要复制的作业名称</p>
     * @param string $TargetName <p>新作业的名称</p>
     * @param string $TargetFolderId <p>新作业的目录id</p>
     * @param integer $JobType <p>作业类型</p><p>枚举值：</p><ul><li>1： sql作业</li><li>2： jar作业</li><li>4： python作业</li></ul>
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("TargetClusterId",$param) and $param["TargetClusterId"] !== null) {
            $this->TargetClusterId = $param["TargetClusterId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("TargetFolderId",$param) and $param["TargetFolderId"] !== null) {
            $this->TargetFolderId = $param["TargetFolderId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }
    }
}
