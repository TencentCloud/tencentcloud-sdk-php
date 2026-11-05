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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话的归属与保存状态
 *
 * @method string getTargetId() 获取<p>targetID</p>
 * @method void setTargetId(string $TargetId) 设置<p>targetID</p>
 * @method string getTargetType() 获取<p>targetType</p>
 * @method void setTargetType(string $TargetType) 设置<p>targetType</p>
 * @method string getTargetName() 获取<p>target名称</p>
 * @method void setTargetName(string $TargetName) 设置<p>target名称</p>
 * @method string getSource() 获取<p>资源名称</p>
 * @method void setSource(string $Source) 设置<p>资源名称</p>
 * @method string getLastInteractionTime() 获取<p>最后活跃时间</p><p>参数格式：2026-11-05 14:30:00</p>
 * @method void setLastInteractionTime(string $LastInteractionTime) 设置<p>最后活跃时间</p><p>参数格式：2026-11-05 14:30:00</p>
 * @method SurfaceContext getSurfaceContext() 获取<p>上下文</p>
 * @method void setSurfaceContext(SurfaceContext $SurfaceContext) 设置<p>上下文</p>
 * @method boolean getSaved() 获取<p>是否保存</p>
 * @method void setSaved(boolean $Saved) 设置<p>是否保存</p>
 * @method string getSavedAt() 获取<p>保存时间</p>
 * @method void setSavedAt(string $SavedAt) 设置<p>保存时间</p>
 * @method boolean getDeleted() 获取<p>是否删除</p>
 * @method void setDeleted(boolean $Deleted) 设置<p>是否删除</p>
 */
class SessionTargetInfo extends AbstractModel
{
    /**
     * @var string <p>targetID</p>
     */
    public $TargetId;

    /**
     * @var string <p>targetType</p>
     */
    public $TargetType;

    /**
     * @var string <p>target名称</p>
     */
    public $TargetName;

    /**
     * @var string <p>资源名称</p>
     */
    public $Source;

    /**
     * @var string <p>最后活跃时间</p><p>参数格式：2026-11-05 14:30:00</p>
     */
    public $LastInteractionTime;

    /**
     * @var SurfaceContext <p>上下文</p>
     */
    public $SurfaceContext;

    /**
     * @var boolean <p>是否保存</p>
     */
    public $Saved;

    /**
     * @var string <p>保存时间</p>
     */
    public $SavedAt;

    /**
     * @var boolean <p>是否删除</p>
     */
    public $Deleted;

    /**
     * @param string $TargetId <p>targetID</p>
     * @param string $TargetType <p>targetType</p>
     * @param string $TargetName <p>target名称</p>
     * @param string $Source <p>资源名称</p>
     * @param string $LastInteractionTime <p>最后活跃时间</p><p>参数格式：2026-11-05 14:30:00</p>
     * @param SurfaceContext $SurfaceContext <p>上下文</p>
     * @param boolean $Saved <p>是否保存</p>
     * @param string $SavedAt <p>保存时间</p>
     * @param boolean $Deleted <p>是否删除</p>
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("LastInteractionTime",$param) and $param["LastInteractionTime"] !== null) {
            $this->LastInteractionTime = $param["LastInteractionTime"];
        }

        if (array_key_exists("SurfaceContext",$param) and $param["SurfaceContext"] !== null) {
            $this->SurfaceContext = new SurfaceContext();
            $this->SurfaceContext->deserialize($param["SurfaceContext"]);
        }

        if (array_key_exists("Saved",$param) and $param["Saved"] !== null) {
            $this->Saved = $param["Saved"];
        }

        if (array_key_exists("SavedAt",$param) and $param["SavedAt"] !== null) {
            $this->SavedAt = $param["SavedAt"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }
    }
}
