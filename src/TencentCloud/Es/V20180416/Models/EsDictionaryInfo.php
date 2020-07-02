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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES IK词库信息
 *
 * @method array getMainDict() 获取启用词词典列表
 * @method void setMainDict(array $MainDict) 设置启用词词典列表
 * @method array getStopwords() 获取停用词词典列表
 * @method void setStopwords(array $Stopwords) 设置停用词词典列表
 */
class EsDictionaryInfo extends AbstractModel
{
    /**
     * @var array 启用词词典列表
     */
    public $MainDict;

    /**
     * @var array 停用词词典列表
     */
    public $Stopwords;

    /**
     * @param array $MainDict 启用词词典列表
     * @param array $Stopwords 停用词词典列表
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
        if (array_key_exists('MainDict',$param) and $param['MainDict'] !== null) {
            $this->MainDict = [];
            foreach ($param['MainDict'] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->MainDict, $obj);
            }
        }

        if (array_key_exists('Stopwords',$param) and $param['Stopwords'] !== null) {
            $this->Stopwords = [];
            foreach ($param['Stopwords'] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->Stopwords, $obj);
            }
        }
    }
}
