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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchAttackLog返回参数结构体
 *
 * @method integer getCount() 获取当前返回的攻击日志条数
 * @method void setCount(integer $Count) 设置当前返回的攻击日志条数
 * @method string getContext() 获取翻页游标，如果没有下一页了，这个参数为空""
 * @method void setContext(string $Context) 设置翻页游标，如果没有下一页了，这个参数为空""
 * @method array getData() 获取攻击日志数组条目内容
 * @method void setData(array $Data) 设置攻击日志数组条目内容
 * @method boolean getListOver() 获取CLS接口返回内容
 * @method void setListOver(boolean $ListOver) 设置CLS接口返回内容
 * @method boolean getSqlFlag() 获取CLS接口返回内容，标志是否启动新版本索引
 * @method void setSqlFlag(boolean $SqlFlag) 设置CLS接口返回内容，标志是否启动新版本索引
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SearchAttackLogResponse extends AbstractModel
{
    /**
     * @var integer 当前返回的攻击日志条数
     */
    public $Count;

    /**
     * @var string 翻页游标，如果没有下一页了，这个参数为空""
     */
    public $Context;

    /**
     * @var array 攻击日志数组条目内容
     */
    public $Data;

    /**
     * @var boolean CLS接口返回内容
     */
    public $ListOver;

    /**
     * @var boolean CLS接口返回内容，标志是否启动新版本索引
     */
    public $SqlFlag;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 当前返回的攻击日志条数
     * @param string $Context 翻页游标，如果没有下一页了，这个参数为空""
     * @param array $Data 攻击日志数组条目内容
     * @param boolean $ListOver CLS接口返回内容
     * @param boolean $SqlFlag CLS接口返回内容，标志是否启动新版本索引
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new AttackLogInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("SqlFlag",$param) and $param["SqlFlag"] !== null) {
            $this->SqlFlag = $param["SqlFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
