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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多云盘参数
 *
 * @method integer getCount() 获取该类型云盘个数
 * @method void setCount(integer $Count) 设置该类型云盘个数
 * @method integer getType() 获取磁盘类型
1  :本地盘
2  :云硬盘
3  : 本地SSD
4  : 云SSD
5  : 高效云盘
6  : 增强型SSD云硬盘
11 : 吞吐型云硬盘
12 : 极速型SSD云硬盘
13 : 通用型SSD云硬盘
14 : 大数据型云硬盘
15 : 高IO型云硬盘
16 : 远端SSD盘
 * @method void setType(integer $Type) 设置磁盘类型
1  :本地盘
2  :云硬盘
3  : 本地SSD
4  : 云SSD
5  : 高效云盘
6  : 增强型SSD云硬盘
11 : 吞吐型云硬盘
12 : 极速型SSD云硬盘
13 : 通用型SSD云硬盘
14 : 大数据型云硬盘
15 : 高IO型云硬盘
16 : 远端SSD盘
 * @method string getSize() 获取磁盘大小
 * @method void setSize(string $Size) 设置磁盘大小
 * @method integer getVolume() 获取云盘大小,单位b
 * @method void setVolume(integer $Volume) 设置云盘大小,单位b
 */
class MultiDiskMC extends AbstractModel
{
    /**
     * @var integer 该类型云盘个数
     */
    public $Count;

    /**
     * @var integer 磁盘类型
1  :本地盘
2  :云硬盘
3  : 本地SSD
4  : 云SSD
5  : 高效云盘
6  : 增强型SSD云硬盘
11 : 吞吐型云硬盘
12 : 极速型SSD云硬盘
13 : 通用型SSD云硬盘
14 : 大数据型云硬盘
15 : 高IO型云硬盘
16 : 远端SSD盘
     */
    public $Type;

    /**
     * @var string 磁盘大小
     */
    public $Size;

    /**
     * @var integer 云盘大小,单位b
     */
    public $Volume;

    /**
     * @param integer $Count 该类型云盘个数
     * @param integer $Type 磁盘类型
1  :本地盘
2  :云硬盘
3  : 本地SSD
4  : 云SSD
5  : 高效云盘
6  : 增强型SSD云硬盘
11 : 吞吐型云硬盘
12 : 极速型SSD云硬盘
13 : 通用型SSD云硬盘
14 : 大数据型云硬盘
15 : 高IO型云硬盘
16 : 远端SSD盘
     * @param string $Size 磁盘大小
     * @param integer $Volume 云盘大小,单位b
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
