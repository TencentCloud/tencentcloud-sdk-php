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
 * SearchKTVMusics请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method string getKeyWord() 获取关键词。
 * @method void setKeyWord(string $KeyWord) 设置关键词。
 * @method string getScrollToken() 获取滚动标记。
 * @method void setScrollToken(string $ScrollToken) 设置滚动标记。
 * @method integer getLimit() 获取返回条数限制，默认 20，最大 50.
 * @method void setLimit(integer $Limit) 设置返回条数限制，默认 20，最大 50.
 * @method array getRightFilters() 获取权益过滤，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
 * @method void setRightFilters(array $RightFilters) 设置权益过滤，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
 * @method string getPlayScene() 获取播放场景。默认为Chat
<li>Live：直播</li><li>Chat：语聊</li>
 * @method void setPlayScene(string $PlayScene) 设置播放场景。默认为Chat
<li>Live：直播</li><li>Chat：语聊</li>
 * @method array getMaterialFilters() 获取物料过滤，取值有：
<li>Lyrics：含有歌词；</li>
<li>Midi：含有音高线。</li>
 * @method void setMaterialFilters(array $MaterialFilters) 设置物料过滤，取值有：
<li>Lyrics：含有歌词；</li>
<li>Midi：含有音高线。</li>
 */
class SearchKTVMusicsRequest extends AbstractModel
{
    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 用户标识。
     */
    public $UserId;

    /**
     * @var string 关键词。
     */
    public $KeyWord;

    /**
     * @var string 滚动标记。
     */
    public $ScrollToken;

    /**
     * @var integer 返回条数限制，默认 20，最大 50.
     */
    public $Limit;

    /**
     * @var array 权益过滤，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
     */
    public $RightFilters;

    /**
     * @var string 播放场景。默认为Chat
<li>Live：直播</li><li>Chat：语聊</li>
     */
    public $PlayScene;

    /**
     * @var array 物料过滤，取值有：
<li>Lyrics：含有歌词；</li>
<li>Midi：含有音高线。</li>
     */
    public $MaterialFilters;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param string $KeyWord 关键词。
     * @param string $ScrollToken 滚动标记。
     * @param integer $Limit 返回条数限制，默认 20，最大 50.
     * @param array $RightFilters 权益过滤，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
     * @param string $PlayScene 播放场景。默认为Chat
<li>Live：直播</li><li>Chat：语聊</li>
     * @param array $MaterialFilters 物料过滤，取值有：
<li>Lyrics：含有歌词；</li>
<li>Midi：含有音高线。</li>
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RightFilters",$param) and $param["RightFilters"] !== null) {
            $this->RightFilters = $param["RightFilters"];
        }

        if (array_key_exists("PlayScene",$param) and $param["PlayScene"] !== null) {
            $this->PlayScene = $param["PlayScene"];
        }

        if (array_key_exists("MaterialFilters",$param) and $param["MaterialFilters"] !== null) {
            $this->MaterialFilters = $param["MaterialFilters"];
        }
    }
}
