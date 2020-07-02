<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Tbm\V20180129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 电影喜好画像元素
 *
 * @method string getName() 获取电影名称
 * @method void setName(string $Name) 设置电影名称
 * @method float getPercent() 获取百分比
 * @method void setPercent(float $Percent) 设置百分比
 */
class MoviePortrait extends AbstractModel
{
    /**
     * @var string 电影名称
     */
    public $Name;

    /**
     * @var float 百分比
     */
    public $Percent;

    /**
     * @param string $Name 电影名称
     * @param float $Percent 百分比
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
        if (array_key_exists('Name',$param) and $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Percent',$param) and $param['Percent'] !== null) {
            $this->Percent = $param['Percent'];
        }
    }
}
