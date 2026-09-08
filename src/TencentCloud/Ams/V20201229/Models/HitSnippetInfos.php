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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机审命中信息
 *
 * @method string getTarget() 获取<p>命中内容</p>
 * @method void setTarget(string $Target) 设置<p>命中内容</p>
 * @method string getSnippet() 获取<p>文本命中的文本块</p>
 * @method void setSnippet(string $Snippet) 设置<p>文本命中的文本块</p>
 * @method string getScene() 获取<p>命中场景</p>
 * @method void setScene(string $Scene) 设置<p>命中场景</p>
 * @method string getAtomicCategory() 获取<p>命中类型</p>
 * @method void setAtomicCategory(string $AtomicCategory) 设置<p>命中类型</p>
 * @method string getAtomicName() 获取<p>命中类型库/模型名称</p>
 * @method void setAtomicName(string $AtomicName) 设置<p>命中类型库/模型名称</p>
 * @method string getAtomicId() 获取<p>命中原子能力</p>
 * @method void setAtomicId(string $AtomicId) 设置<p>命中原子能力</p>
 * @method string getUnitId() 获取<p>命中单位</p>
 * @method void setUnitId(string $UnitId) 设置<p>命中单位</p>
 * @method string getUnitName() 获取<p>命中单位名称</p>
 * @method void setUnitName(string $UnitName) 设置<p>命中单位名称</p>
 * @method string getParticleId() 获取<p>命中颗粒ID</p>
 * @method void setParticleId(string $ParticleId) 设置<p>命中颗粒ID</p>
 * @method array getPositions() 获取<p>命中文本在原文起始位置</p>
 * @method void setPositions(array $Positions) 设置<p>命中文本在原文起始位置</p>
 * @method Duration getDuration() 获取<p>命中音时间位置</p>
 * @method void setDuration(Duration $Duration) 设置<p>命中音时间位置</p>
 * @method integer getScore() 获取<p>分数</p>
 * @method void setScore(integer $Score) 设置<p>分数</p>
 */
class HitSnippetInfos extends AbstractModel
{
    /**
     * @var string <p>命中内容</p>
     */
    public $Target;

    /**
     * @var string <p>文本命中的文本块</p>
     */
    public $Snippet;

    /**
     * @var string <p>命中场景</p>
     */
    public $Scene;

    /**
     * @var string <p>命中类型</p>
     */
    public $AtomicCategory;

    /**
     * @var string <p>命中类型库/模型名称</p>
     */
    public $AtomicName;

    /**
     * @var string <p>命中原子能力</p>
     */
    public $AtomicId;

    /**
     * @var string <p>命中单位</p>
     */
    public $UnitId;

    /**
     * @var string <p>命中单位名称</p>
     */
    public $UnitName;

    /**
     * @var string <p>命中颗粒ID</p>
     */
    public $ParticleId;

    /**
     * @var array <p>命中文本在原文起始位置</p>
     */
    public $Positions;

    /**
     * @var Duration <p>命中音时间位置</p>
     */
    public $Duration;

    /**
     * @var integer <p>分数</p>
     */
    public $Score;

    /**
     * @param string $Target <p>命中内容</p>
     * @param string $Snippet <p>文本命中的文本块</p>
     * @param string $Scene <p>命中场景</p>
     * @param string $AtomicCategory <p>命中类型</p>
     * @param string $AtomicName <p>命中类型库/模型名称</p>
     * @param string $AtomicId <p>命中原子能力</p>
     * @param string $UnitId <p>命中单位</p>
     * @param string $UnitName <p>命中单位名称</p>
     * @param string $ParticleId <p>命中颗粒ID</p>
     * @param array $Positions <p>命中文本在原文起始位置</p>
     * @param Duration $Duration <p>命中音时间位置</p>
     * @param integer $Score <p>分数</p>
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
        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Snippet",$param) and $param["Snippet"] !== null) {
            $this->Snippet = $param["Snippet"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("AtomicCategory",$param) and $param["AtomicCategory"] !== null) {
            $this->AtomicCategory = $param["AtomicCategory"];
        }

        if (array_key_exists("AtomicName",$param) and $param["AtomicName"] !== null) {
            $this->AtomicName = $param["AtomicName"];
        }

        if (array_key_exists("AtomicId",$param) and $param["AtomicId"] !== null) {
            $this->AtomicId = $param["AtomicId"];
        }

        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("UnitName",$param) and $param["UnitName"] !== null) {
            $this->UnitName = $param["UnitName"];
        }

        if (array_key_exists("ParticleId",$param) and $param["ParticleId"] !== null) {
            $this->ParticleId = $param["ParticleId"];
        }

        if (array_key_exists("Positions",$param) and $param["Positions"] !== null) {
            $this->Positions = [];
            foreach ($param["Positions"] as $key => $value){
                $obj = new Position();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = new Duration();
            $this->Duration->deserialize($param["Duration"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
