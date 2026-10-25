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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 符号化结果。未翻译时只填 Status / SkipReason。
 *
 * @method integer getSymbolicationVersion() 获取<p>符号化版本</p>
 * @method void setSymbolicationVersion(integer $SymbolicationVersion) 设置<p>符号化版本</p>
 * @method string getSymbolicatedAt() 获取<p>符号化时间</p>
 * @method void setSymbolicatedAt(string $SymbolicatedAt) 设置<p>符号化时间</p>
 * @method string getSymbolicationStatus() 获取<p>状态：success / missing / skipped</p>
 * @method void setSymbolicationStatus(string $SymbolicationStatus) 设置<p>状态：success / missing / skipped</p>
 * @method string getSymbolicationSkipReason() 获取<p>跳过原因</p>
 * @method void setSymbolicationSkipReason(string $SymbolicationSkipReason) 设置<p>跳过原因</p>
 * @method string getSymbolicationSource() 获取<p>来源</p>
 * @method void setSymbolicationSource(string $SymbolicationSource) 设置<p>来源</p>
 * @method string getSymbolicationRelease() 获取<p>release</p>
 * @method void setSymbolicationRelease(string $SymbolicationRelease) 设置<p>release</p>
 * @method string getSymbolicationDist() 获取<p>dist</p>
 * @method void setSymbolicationDist(string $SymbolicationDist) 设置<p>dist</p>
 * @method integer getSymbolicationDurationMs() 获取<p>耗时毫秒</p>
 * @method void setSymbolicationDurationMs(integer $SymbolicationDurationMs) 设置<p>耗时毫秒</p>
 * @method string getSymbolicatorRequestId() 获取<p>Symbolicator 请求 ID</p>
 * @method void setSymbolicatorRequestId(string $SymbolicatorRequestId) 设置<p>Symbolicator 请求 ID</p>
 * @method array getFrames() 获取<p>翻译后堆栈帧</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrames(array $Frames) 设置<p>翻译后堆栈帧</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SymbolicatedView extends AbstractModel
{
    /**
     * @var integer <p>符号化版本</p>
     */
    public $SymbolicationVersion;

    /**
     * @var string <p>符号化时间</p>
     */
    public $SymbolicatedAt;

    /**
     * @var string <p>状态：success / missing / skipped</p>
     */
    public $SymbolicationStatus;

    /**
     * @var string <p>跳过原因</p>
     */
    public $SymbolicationSkipReason;

    /**
     * @var string <p>来源</p>
     */
    public $SymbolicationSource;

    /**
     * @var string <p>release</p>
     */
    public $SymbolicationRelease;

    /**
     * @var string <p>dist</p>
     */
    public $SymbolicationDist;

    /**
     * @var integer <p>耗时毫秒</p>
     */
    public $SymbolicationDurationMs;

    /**
     * @var string <p>Symbolicator 请求 ID</p>
     */
    public $SymbolicatorRequestId;

    /**
     * @var array <p>翻译后堆栈帧</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Frames;

    /**
     * @param integer $SymbolicationVersion <p>符号化版本</p>
     * @param string $SymbolicatedAt <p>符号化时间</p>
     * @param string $SymbolicationStatus <p>状态：success / missing / skipped</p>
     * @param string $SymbolicationSkipReason <p>跳过原因</p>
     * @param string $SymbolicationSource <p>来源</p>
     * @param string $SymbolicationRelease <p>release</p>
     * @param string $SymbolicationDist <p>dist</p>
     * @param integer $SymbolicationDurationMs <p>耗时毫秒</p>
     * @param string $SymbolicatorRequestId <p>Symbolicator 请求 ID</p>
     * @param array $Frames <p>翻译后堆栈帧</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SymbolicationVersion",$param) and $param["SymbolicationVersion"] !== null) {
            $this->SymbolicationVersion = $param["SymbolicationVersion"];
        }

        if (array_key_exists("SymbolicatedAt",$param) and $param["SymbolicatedAt"] !== null) {
            $this->SymbolicatedAt = $param["SymbolicatedAt"];
        }

        if (array_key_exists("SymbolicationStatus",$param) and $param["SymbolicationStatus"] !== null) {
            $this->SymbolicationStatus = $param["SymbolicationStatus"];
        }

        if (array_key_exists("SymbolicationSkipReason",$param) and $param["SymbolicationSkipReason"] !== null) {
            $this->SymbolicationSkipReason = $param["SymbolicationSkipReason"];
        }

        if (array_key_exists("SymbolicationSource",$param) and $param["SymbolicationSource"] !== null) {
            $this->SymbolicationSource = $param["SymbolicationSource"];
        }

        if (array_key_exists("SymbolicationRelease",$param) and $param["SymbolicationRelease"] !== null) {
            $this->SymbolicationRelease = $param["SymbolicationRelease"];
        }

        if (array_key_exists("SymbolicationDist",$param) and $param["SymbolicationDist"] !== null) {
            $this->SymbolicationDist = $param["SymbolicationDist"];
        }

        if (array_key_exists("SymbolicationDurationMs",$param) and $param["SymbolicationDurationMs"] !== null) {
            $this->SymbolicationDurationMs = $param["SymbolicationDurationMs"];
        }

        if (array_key_exists("SymbolicatorRequestId",$param) and $param["SymbolicatorRequestId"] !== null) {
            $this->SymbolicatorRequestId = $param["SymbolicatorRequestId"];
        }

        if (array_key_exists("Frames",$param) and $param["Frames"] !== null) {
            $this->Frames = [];
            foreach ($param["Frames"] as $key => $value){
                $obj = new EventFrame();
                $obj->deserialize($value);
                array_push($this->Frames, $obj);
            }
        }
    }
}
