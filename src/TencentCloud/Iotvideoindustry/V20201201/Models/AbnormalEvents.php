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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异动事件走势列表
 *
 * @method string getDate() 获取对应查询日期
 * @method void setDate(string $Date) 设置对应查询日期
 * @method array getInfo() 获取列表信息
 * @method void setInfo(array $Info) 设置列表信息
 */
class AbnormalEvents extends AbstractModel
{
    /**
     * @var string 对应查询日期
     */
    public $Date;

    /**
     * @var array 列表信息
     */
    public $Info;

    /**
     * @param string $Date 对应查询日期
     * @param array $Info 列表信息
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = [];
            foreach ($param["Info"] as $key => $value){
                $obj = new AbnormalEventsInfo();
                $obj->deserialize($value);
                array_push($this->Info, $obj);
            }
        }
    }
}
