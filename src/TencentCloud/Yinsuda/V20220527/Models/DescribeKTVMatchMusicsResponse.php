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
 * DescribeKTVMatchMusics返回参数结构体
 *
 * @method array getMatchMusicSet() 获取匹配到的歌曲列表。
 * @method void setMatchMusicSet(array $MatchMusicSet) 设置匹配到的歌曲列表。
 * @method array getNotMatchRuleSet() 获取未匹配的规则列表。
 * @method void setNotMatchRuleSet(array $NotMatchRuleSet) 设置未匹配的规则列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKTVMatchMusicsResponse extends AbstractModel
{
    /**
     * @var array 匹配到的歌曲列表。
     */
    public $MatchMusicSet;

    /**
     * @var array 未匹配的规则列表。
     */
    public $NotMatchRuleSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MatchMusicSet 匹配到的歌曲列表。
     * @param array $NotMatchRuleSet 未匹配的规则列表。
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
        if (array_key_exists("MatchMusicSet",$param) and $param["MatchMusicSet"] !== null) {
            $this->MatchMusicSet = [];
            foreach ($param["MatchMusicSet"] as $key => $value){
                $obj = new KTVMatchMusic();
                $obj->deserialize($value);
                array_push($this->MatchMusicSet, $obj);
            }
        }

        if (array_key_exists("NotMatchRuleSet",$param) and $param["NotMatchRuleSet"] !== null) {
            $this->NotMatchRuleSet = [];
            foreach ($param["NotMatchRuleSet"] as $key => $value){
                $obj = new KTVMatchRule();
                $obj->deserialize($value);
                array_push($this->NotMatchRuleSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
