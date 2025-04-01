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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增量迁移回源 HTTP Header 信息。
 *
 * @method string getHeaderFollowMode() 获取Http Header 透传模式。取值有：
<li>FOLLOW_ALL：透传所有头部信息；</li>
<li>FOLLOW_PART：透传部分头部信息；</li>
<li>IGNORE_PART：忽略部分头部信息。</li>参数必填。
 * @method void setHeaderFollowMode(string $HeaderFollowMode) 设置Http Header 透传模式。取值有：
<li>FOLLOW_ALL：透传所有头部信息；</li>
<li>FOLLOW_PART：透传部分头部信息；</li>
<li>IGNORE_PART：忽略部分头部信息。</li>参数必填。
 * @method array getFollowHttpHeaderKeySet() 获取需透传 Header Key 集合，仅当 HeaderFollowMode 取值 `FOLLOW_PART` 时需要填充。
 * @method void setFollowHttpHeaderKeySet(array $FollowHttpHeaderKeySet) 设置需透传 Header Key 集合，仅当 HeaderFollowMode 取值 `FOLLOW_PART` 时需要填充。
 * @method array getNewHttpHeaderSet() 获取新增 Header 键值对集合。
 * @method void setNewHttpHeaderSet(array $NewHttpHeaderSet) 设置新增 Header 键值对集合。
 */
class IncrementalMigrationHttpHeaderInfo extends AbstractModel
{
    /**
     * @var string Http Header 透传模式。取值有：
<li>FOLLOW_ALL：透传所有头部信息；</li>
<li>FOLLOW_PART：透传部分头部信息；</li>
<li>IGNORE_PART：忽略部分头部信息。</li>参数必填。
     */
    public $HeaderFollowMode;

    /**
     * @var array 需透传 Header Key 集合，仅当 HeaderFollowMode 取值 `FOLLOW_PART` 时需要填充。
     */
    public $FollowHttpHeaderKeySet;

    /**
     * @var array 新增 Header 键值对集合。
     */
    public $NewHttpHeaderSet;

    /**
     * @param string $HeaderFollowMode Http Header 透传模式。取值有：
<li>FOLLOW_ALL：透传所有头部信息；</li>
<li>FOLLOW_PART：透传部分头部信息；</li>
<li>IGNORE_PART：忽略部分头部信息。</li>参数必填。
     * @param array $FollowHttpHeaderKeySet 需透传 Header Key 集合，仅当 HeaderFollowMode 取值 `FOLLOW_PART` 时需要填充。
     * @param array $NewHttpHeaderSet 新增 Header 键值对集合。
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
        if (array_key_exists("HeaderFollowMode",$param) and $param["HeaderFollowMode"] !== null) {
            $this->HeaderFollowMode = $param["HeaderFollowMode"];
        }

        if (array_key_exists("FollowHttpHeaderKeySet",$param) and $param["FollowHttpHeaderKeySet"] !== null) {
            $this->FollowHttpHeaderKeySet = $param["FollowHttpHeaderKeySet"];
        }

        if (array_key_exists("NewHttpHeaderSet",$param) and $param["NewHttpHeaderSet"] !== null) {
            $this->NewHttpHeaderSet = [];
            foreach ($param["NewHttpHeaderSet"] as $key => $value){
                $obj = new IncrementalMigrationHttpHeader();
                $obj->deserialize($value);
                array_push($this->NewHttpHeaderSet, $obj);
            }
        }
    }
}
