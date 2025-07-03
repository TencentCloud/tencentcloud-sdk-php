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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 体检报告-内科-腹部-肾脏
 *
 * @method KeyValueItem getSrc() 获取肾脏总体描述
 * @method void setSrc(KeyValueItem $Src) 设置肾脏总体描述
 * @method KeyValueItem getSize() 获取肾脏大小
 * @method void setSize(KeyValueItem $Size) 设置肾脏大小
 * @method KeyValueItem getPalpation() 获取肾脏触诊
 * @method void setPalpation(KeyValueItem $Palpation) 设置肾脏触诊
 * @method KeyValueItem getPercussion() 获取肾脏叩诊
 * @method void setPercussion(KeyValueItem $Percussion) 设置肾脏叩诊
 * @method KeyValueItem getTenderness() 获取肾脏压痛
 * @method void setTenderness(KeyValueItem $Tenderness) 设置肾脏压痛
 * @method KeyValueItem getConsistency() 获取肾脏质地
 * @method void setConsistency(KeyValueItem $Consistency) 设置肾脏质地
 */
class InternalMedicineAbdomenKidney extends AbstractModel
{
    /**
     * @var KeyValueItem 肾脏总体描述
     */
    public $Src;

    /**
     * @var KeyValueItem 肾脏大小
     */
    public $Size;

    /**
     * @var KeyValueItem 肾脏触诊
     */
    public $Palpation;

    /**
     * @var KeyValueItem 肾脏叩诊
     */
    public $Percussion;

    /**
     * @var KeyValueItem 肾脏压痛
     */
    public $Tenderness;

    /**
     * @var KeyValueItem 肾脏质地
     */
    public $Consistency;

    /**
     * @param KeyValueItem $Src 肾脏总体描述
     * @param KeyValueItem $Size 肾脏大小
     * @param KeyValueItem $Palpation 肾脏触诊
     * @param KeyValueItem $Percussion 肾脏叩诊
     * @param KeyValueItem $Tenderness 肾脏压痛
     * @param KeyValueItem $Consistency 肾脏质地
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
        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = new KeyValueItem();
            $this->Src->deserialize($param["Src"]);
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = new KeyValueItem();
            $this->Size->deserialize($param["Size"]);
        }

        if (array_key_exists("Palpation",$param) and $param["Palpation"] !== null) {
            $this->Palpation = new KeyValueItem();
            $this->Palpation->deserialize($param["Palpation"]);
        }

        if (array_key_exists("Percussion",$param) and $param["Percussion"] !== null) {
            $this->Percussion = new KeyValueItem();
            $this->Percussion->deserialize($param["Percussion"]);
        }

        if (array_key_exists("Tenderness",$param) and $param["Tenderness"] !== null) {
            $this->Tenderness = new KeyValueItem();
            $this->Tenderness->deserialize($param["Tenderness"]);
        }

        if (array_key_exists("Consistency",$param) and $param["Consistency"] !== null) {
            $this->Consistency = new KeyValueItem();
            $this->Consistency->deserialize($param["Consistency"]);
        }
    }
}
