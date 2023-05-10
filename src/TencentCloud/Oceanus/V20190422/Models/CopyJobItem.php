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
 * 复制作业单条明细
 *
 * @method string getSourceId() 获取需要复制的作业serial id
 * @method void setSourceId(string $SourceId) 设置需要复制的作业serial id
 * @method string getTargetClusterId() 获取目标集群的cluster serial id
 * @method void setTargetClusterId(string $TargetClusterId) 设置目标集群的cluster serial id
 * @method string getSourceName() 获取需要复制的作业名称
 * @method void setSourceName(string $SourceName) 设置需要复制的作业名称
 * @method string getTargetName() 获取新作业的名称
 * @method void setTargetName(string $TargetName) 设置新作业的名称
 * @method string getTargetFolderId() 获取新作业的目录id
 * @method void setTargetFolderId(string $TargetFolderId) 设置新作业的目录id
 * @method integer getJobType() 获取源作业类型
 * @method void setJobType(integer $JobType) 设置源作业类型
 */
class CopyJobItem extends AbstractModel
{
    /**
     * @var string 需要复制的作业serial id
     */
    public $SourceId;

    /**
     * @var string 目标集群的cluster serial id
     */
    public $TargetClusterId;

    /**
     * @var string 需要复制的作业名称
     */
    public $SourceName;

    /**
     * @var string 新作业的名称
     */
    public $TargetName;

    /**
     * @var string 新作业的目录id
     */
    public $TargetFolderId;

    /**
     * @var integer 源作业类型
     */
    public $JobType;

    /**
     * @param string $SourceId 需要复制的作业serial id
     * @param string $TargetClusterId 目标集群的cluster serial id
     * @param string $SourceName 需要复制的作业名称
     * @param string $TargetName 新作业的名称
     * @param string $TargetFolderId 新作业的目录id
     * @param integer $JobType 源作业类型
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
