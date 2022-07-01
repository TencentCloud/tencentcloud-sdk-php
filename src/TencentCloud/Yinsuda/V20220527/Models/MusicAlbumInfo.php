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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 歌曲专辑信息。
 *
 * @method string getName() 获取专辑名称。
 * @method void setName(string $Name) 设置专辑名称。
 * @method array getCoverInfoSet() 获取封面列表。
 * @method void setCoverInfoSet(array $CoverInfoSet) 设置封面列表。
 */
class MusicAlbumInfo extends AbstractModel
{
    /**
     * @var string 专辑名称。
     */
    public $Name;

    /**
     * @var array 封面列表。
     */
    public $CoverInfoSet;

    /**
     * @param string $Name 专辑名称。
     * @param array $CoverInfoSet 封面列表。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CoverInfoSet",$param) and $param["CoverInfoSet"] !== null) {
            $this->CoverInfoSet = [];
            foreach ($param["CoverInfoSet"] as $key => $value){
                $obj = new MusicAlbumCoverInfo();
                $obj->deserialize($value);
                array_push($this->CoverInfoSet, $obj);
            }
        }
    }
}
