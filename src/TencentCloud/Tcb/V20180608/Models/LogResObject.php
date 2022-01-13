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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS日志结果
 *
 * @method string getContext() 获取获取更多检索结果的游标
 * @method void setContext(string $Context) 设置获取更多检索结果的游标
 * @method boolean getListOver() 获取搜索结果是否已经全部返回
 * @method void setListOver(boolean $ListOver) 设置搜索结果是否已经全部返回
 * @method array getResults() 获取日志内容信息
 * @method void setResults(array $Results) 设置日志内容信息
 */
class LogResObject extends AbstractModel
{
    /**
     * @var string 获取更多检索结果的游标
     */
    public $Context;

    /**
     * @var boolean 搜索结果是否已经全部返回
     */
    public $ListOver;

    /**
     * @var array 日志内容信息
     */
    public $Results;

    /**
     * @param string $Context 获取更多检索结果的游标
     * @param boolean $ListOver 搜索结果是否已经全部返回
     * @param array $Results 日志内容信息
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new LogObject();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }
    }
}
