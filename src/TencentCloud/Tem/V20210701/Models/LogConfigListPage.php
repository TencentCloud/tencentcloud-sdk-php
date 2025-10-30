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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LogConfig 列表结果
 *
 * @method array getRecords() 获取记录
 * @method void setRecords(array $Records) 设置记录
 * @method string getContinueToken() 获取翻页游标
 * @method void setContinueToken(string $ContinueToken) 设置翻页游标
 */
class LogConfigListPage extends AbstractModel
{
    /**
     * @var array 记录
     */
    public $Records;

    /**
     * @var string 翻页游标
     */
    public $ContinueToken;

    /**
     * @param array $Records 记录
     * @param string $ContinueToken 翻页游标
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
        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new LogConfig();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("ContinueToken",$param) and $param["ContinueToken"] !== null) {
            $this->ContinueToken = $param["ContinueToken"];
        }
    }
}
