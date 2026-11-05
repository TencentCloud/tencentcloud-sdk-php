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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LoRA Adapter 元信息
 *
 * @method integer getRank() 获取<p>Lora Rank</p>
 * @method void setRank(integer $Rank) 设置<p>Lora Rank</p>
 * @method integer getAlpha() 获取<p>Lora Alpha</p>
 * @method void setAlpha(integer $Alpha) 设置<p>Lora Alpha</p>
 * @method float getDropout() 获取<p>LoRA dropout</p>
 * @method void setDropout(float $Dropout) 设置<p>LoRA dropout</p>
 * @method array getTargetModules() 获取<p>注入的目标模块</p>
 * @method void setTargetModules(array $TargetModules) 设置<p>注入的目标模块</p>
 * @method string getPEFTType() 获取<p>PEFT 类型（如 LORA）</p>
 * @method void setPEFTType(string $PEFTType) 设置<p>PEFT 类型（如 LORA）</p>
 * @method string getTaskType() 获取<p>任务类型（如 CAUSAL_LM）</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型（如 CAUSAL_LM）</p>
 * @method string getBaseModelNameOrPath() 获取<p>训练时声明的基座名称或路径（base_model_name_or_path）</p>
 * @method void setBaseModelNameOrPath(string $BaseModelNameOrPath) 设置<p>训练时声明的基座名称或路径（base_model_name_or_path）</p>
 * @method integer getMaxRank() 获取<p>最大 rank（含 rank_pattern 分模块 rank；仅当其大于 Rank 时返回）</p>
 * @method void setMaxRank(integer $MaxRank) 设置<p>最大 rank（含 rank_pattern 分模块 rank；仅当其大于 Rank 时返回）</p>
 */
class LoraVersionMeta extends AbstractModel
{
    /**
     * @var integer <p>Lora Rank</p>
     */
    public $Rank;

    /**
     * @var integer <p>Lora Alpha</p>
     */
    public $Alpha;

    /**
     * @var float <p>LoRA dropout</p>
     */
    public $Dropout;

    /**
     * @var array <p>注入的目标模块</p>
     */
    public $TargetModules;

    /**
     * @var string <p>PEFT 类型（如 LORA）</p>
     */
    public $PEFTType;

    /**
     * @var string <p>任务类型（如 CAUSAL_LM）</p>
     */
    public $TaskType;

    /**
     * @var string <p>训练时声明的基座名称或路径（base_model_name_or_path）</p>
     */
    public $BaseModelNameOrPath;

    /**
     * @var integer <p>最大 rank（含 rank_pattern 分模块 rank；仅当其大于 Rank 时返回）</p>
     */
    public $MaxRank;

    /**
     * @param integer $Rank <p>Lora Rank</p>
     * @param integer $Alpha <p>Lora Alpha</p>
     * @param float $Dropout <p>LoRA dropout</p>
     * @param array $TargetModules <p>注入的目标模块</p>
     * @param string $PEFTType <p>PEFT 类型（如 LORA）</p>
     * @param string $TaskType <p>任务类型（如 CAUSAL_LM）</p>
     * @param string $BaseModelNameOrPath <p>训练时声明的基座名称或路径（base_model_name_or_path）</p>
     * @param integer $MaxRank <p>最大 rank（含 rank_pattern 分模块 rank；仅当其大于 Rank 时返回）</p>
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
        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }

        if (array_key_exists("Alpha",$param) and $param["Alpha"] !== null) {
            $this->Alpha = $param["Alpha"];
        }

        if (array_key_exists("Dropout",$param) and $param["Dropout"] !== null) {
            $this->Dropout = $param["Dropout"];
        }

        if (array_key_exists("TargetModules",$param) and $param["TargetModules"] !== null) {
            $this->TargetModules = $param["TargetModules"];
        }

        if (array_key_exists("PEFTType",$param) and $param["PEFTType"] !== null) {
            $this->PEFTType = $param["PEFTType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("BaseModelNameOrPath",$param) and $param["BaseModelNameOrPath"] !== null) {
            $this->BaseModelNameOrPath = $param["BaseModelNameOrPath"];
        }

        if (array_key_exists("MaxRank",$param) and $param["MaxRank"] !== null) {
            $this->MaxRank = $param["MaxRank"];
        }
    }
}
