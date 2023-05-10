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
namespace TencentCloud\Tts\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToVoice请求参数结构体
 *
 * @method string getText() 获取合成语音的源文本，按UTF-8编码统一计算。
中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
 * @method void setText(string $Text) 设置合成语音的源文本，按UTF-8编码统一计算。
中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
 * @method string getSessionId() 获取一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
 * @method void setSessionId(string $SessionId) 设置一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
 * @method float getVolume() 获取音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
 * @method void setVolume(float $Volume) 设置音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
 * @method float getSpeed() 获取语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后一位，例如0.5 1.1 1.8等。<br>
 * @method void setSpeed(float $Speed) 设置语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后一位，例如0.5 1.1 1.8等。<br>
 * @method integer getProjectId() 获取项目id，用户自定义，默认为0。
 * @method void setProjectId(integer $ProjectId) 设置项目id，用户自定义，默认为0。
 * @method integer getModelType() 获取模型类型，1-默认模型。
 * @method void setModelType(integer $ModelType) 设置模型类型，1-默认模型。
 * @method integer getVoiceType() 获取标准音色<li>10510000-智逍遥，阅读男声</li><li>1001-智瑜，情感女声</li><li>1002-智聆，通用女声</li><li>1003-智美，客服女声</li><li>1004-智云，通用男声</li><li>1005-智莉，通用女声</li><li>1007-智娜，客服女声</li><li>1008-智琪，客服女声</li><li>1009-智芸，知性女声</li><li>1010-智华，通用男声</li><li>1017-智蓉，情感女声</li><li>1018-智靖，情感男声</li><li>1050-WeJack，英文男声</li><li>1051-WeRose，英文女声</li>精品音色<br>精品音色拟真度更高，价格不同于标准音色，查看[购买指南](https://cloud.tencent.com/document/product/1073/34112)<br><li>100510000-智逍遥，阅读男声</li><li>101001-智瑜，情感女声</li><li>101002-智聆，通用女声</li><li>101003-智美，客服女声</li><li>101004-智云，通用男声</li><li>101005-智莉，通用女声</li><li>101006-智言，助手女声</li><li>101007-智娜，客服女声</li><li>101008-智琪，客服女声</li><li>101009-智芸，知性女声</li><li>101010-智华，通用男声</li><li>101011-智燕，新闻女声</li><li>101012-智丹，新闻女声</li><li>101013-智辉，新闻男声</li><li>101014-智宁，新闻男声</li><li>101015-智萌，男童声</li><li>101016-智甜，女童声</li><li>101017-智蓉，情感女声</li><li>101018-智靖，情感男声</li><li>101019-智彤，粤语女声</li><li>101020-智刚，新闻男声</li><li>101021-智瑞，新闻男声</li><li>101022-智虹，新闻女声</li><li>101023-智萱，聊天女声</li><li>101024-智皓，聊天男声</li><li>101025-智薇，聊天女声</li><li>101026-智希，通用女声</li><li>101027-智梅，通用女声</li><li>101028-智洁，通用女声</li><li>101029-智凯，通用男声</li><li>101030-智柯，通用男声</li><li>101031-智奎，通用男声</li><li>101032-智芳，通用女声</li><li>101033-智蓓，客服女声</li><li>101034-智莲，通用女声</li><li>101035-智依，通用女声</li><li>101040-智川，四川女声</li><li>101050-WeJack，英文男声</li><li>101051-WeRose，英文女声</li><li>101052-智味，通用男声</li>
<li>101053-智方，通用男声</li>
<li>101054-智友，通用男声</li>
<li>101055-智付，通用女声</li>
<li>101056-智林，东北男声</li>
<li>301000-爱小广，多情感通用男声</li>
<li>301001-爱小栋，多情感通用男声</li>
<li>301002-爱小海，多情感通用男声</li>
<li>301003-爱小霞，多情感通用女声</li>
<li>301004-爱小玲，多情感通用女声</li>
<li>301005-爱小章，多情感通用男声</li>
<li>301006-爱小峰，多情感通用男声</li>
<li>301007-爱小亮，多情感通用男声</li>
<li>301008-爱小博，多情感通用男声</li>
<li>301009-爱小芸，多情感通用女声</li>
<li>301010-爱小秋，多情感通用女声</li>
<li>301011-爱小芳，多情感通用女声</li>
<li>301012-爱小琴，多情感通用女声</li>
<li>301013-爱小康，多情感通用男声</li>
<li>301014-爱小辉，多情感通用男声</li>
<li>301015-爱小璐，多情感通用女声</li>
<li>301016-爱小阳，多情感通用男声</li>
<li>301017-爱小泉，多情感通用男声</li>
<li>301018-爱小昆，多情感通用男声</li>
<li>301019-爱小诚，多情感通用男声</li>
<li>301020-爱小岚，多情感通用女声</li>
<li>301021-爱小茹，多情感通用女声</li>
<li>301022-爱小蓉，多情感通用女声</li>
<li>301023-爱小燕，多情感通用女声</li>
<li>301024-爱小莲，多情感通用女声</li>
<li>301025-爱小武，多情感通用男声</li>
<li>301026-爱小雪，多情感通用女声</li>
<li>301027-爱小媛，多情感通用女声</li>
<li>301028-爱小娴，多情感通用女声</li>
<li>301029-爱小涛，多情感通用男声</li>
<li>401000-智妍，活力女声</li>
<li>401001-智萱，温暖女声</li>
<li>401002-智飞，活力男声</li>
<li>401003-智悦，活力女声</li>
<li>401004-智海，成熟男声</li>
<li>401005-智凡，新闻男声</li>
<li>401006-智航，导航女声</li>
<li>401007-智婷，广告女声</li>
<li>401008-智霞，通用女声</li>
 * @method void setVoiceType(integer $VoiceType) 设置标准音色<li>10510000-智逍遥，阅读男声</li><li>1001-智瑜，情感女声</li><li>1002-智聆，通用女声</li><li>1003-智美，客服女声</li><li>1004-智云，通用男声</li><li>1005-智莉，通用女声</li><li>1007-智娜，客服女声</li><li>1008-智琪，客服女声</li><li>1009-智芸，知性女声</li><li>1010-智华，通用男声</li><li>1017-智蓉，情感女声</li><li>1018-智靖，情感男声</li><li>1050-WeJack，英文男声</li><li>1051-WeRose，英文女声</li>精品音色<br>精品音色拟真度更高，价格不同于标准音色，查看[购买指南](https://cloud.tencent.com/document/product/1073/34112)<br><li>100510000-智逍遥，阅读男声</li><li>101001-智瑜，情感女声</li><li>101002-智聆，通用女声</li><li>101003-智美，客服女声</li><li>101004-智云，通用男声</li><li>101005-智莉，通用女声</li><li>101006-智言，助手女声</li><li>101007-智娜，客服女声</li><li>101008-智琪，客服女声</li><li>101009-智芸，知性女声</li><li>101010-智华，通用男声</li><li>101011-智燕，新闻女声</li><li>101012-智丹，新闻女声</li><li>101013-智辉，新闻男声</li><li>101014-智宁，新闻男声</li><li>101015-智萌，男童声</li><li>101016-智甜，女童声</li><li>101017-智蓉，情感女声</li><li>101018-智靖，情感男声</li><li>101019-智彤，粤语女声</li><li>101020-智刚，新闻男声</li><li>101021-智瑞，新闻男声</li><li>101022-智虹，新闻女声</li><li>101023-智萱，聊天女声</li><li>101024-智皓，聊天男声</li><li>101025-智薇，聊天女声</li><li>101026-智希，通用女声</li><li>101027-智梅，通用女声</li><li>101028-智洁，通用女声</li><li>101029-智凯，通用男声</li><li>101030-智柯，通用男声</li><li>101031-智奎，通用男声</li><li>101032-智芳，通用女声</li><li>101033-智蓓，客服女声</li><li>101034-智莲，通用女声</li><li>101035-智依，通用女声</li><li>101040-智川，四川女声</li><li>101050-WeJack，英文男声</li><li>101051-WeRose，英文女声</li><li>101052-智味，通用男声</li>
<li>101053-智方，通用男声</li>
<li>101054-智友，通用男声</li>
<li>101055-智付，通用女声</li>
<li>101056-智林，东北男声</li>
<li>301000-爱小广，多情感通用男声</li>
<li>301001-爱小栋，多情感通用男声</li>
<li>301002-爱小海，多情感通用男声</li>
<li>301003-爱小霞，多情感通用女声</li>
<li>301004-爱小玲，多情感通用女声</li>
<li>301005-爱小章，多情感通用男声</li>
<li>301006-爱小峰，多情感通用男声</li>
<li>301007-爱小亮，多情感通用男声</li>
<li>301008-爱小博，多情感通用男声</li>
<li>301009-爱小芸，多情感通用女声</li>
<li>301010-爱小秋，多情感通用女声</li>
<li>301011-爱小芳，多情感通用女声</li>
<li>301012-爱小琴，多情感通用女声</li>
<li>301013-爱小康，多情感通用男声</li>
<li>301014-爱小辉，多情感通用男声</li>
<li>301015-爱小璐，多情感通用女声</li>
<li>301016-爱小阳，多情感通用男声</li>
<li>301017-爱小泉，多情感通用男声</li>
<li>301018-爱小昆，多情感通用男声</li>
<li>301019-爱小诚，多情感通用男声</li>
<li>301020-爱小岚，多情感通用女声</li>
<li>301021-爱小茹，多情感通用女声</li>
<li>301022-爱小蓉，多情感通用女声</li>
<li>301023-爱小燕，多情感通用女声</li>
<li>301024-爱小莲，多情感通用女声</li>
<li>301025-爱小武，多情感通用男声</li>
<li>301026-爱小雪，多情感通用女声</li>
<li>301027-爱小媛，多情感通用女声</li>
<li>301028-爱小娴，多情感通用女声</li>
<li>301029-爱小涛，多情感通用男声</li>
<li>401000-智妍，活力女声</li>
<li>401001-智萱，温暖女声</li>
<li>401002-智飞，活力男声</li>
<li>401003-智悦，活力女声</li>
<li>401004-智海，成熟男声</li>
<li>401005-智凡，新闻男声</li>
<li>401006-智航，导航女声</li>
<li>401007-智婷，广告女声</li>
<li>401008-智霞，通用女声</li>
 * @method integer getPrimaryLanguage() 获取主语言类型：<li>1-中文（默认）</li><li>2-英文</li>
 * @method void setPrimaryLanguage(integer $PrimaryLanguage) 设置主语言类型：<li>1-中文（默认）</li><li>2-英文</li>
 * @method integer getSampleRate() 获取音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
 * @method string getCodec() 获取返回音频格式，可取值：wav（默认），mp3，pcm
 * @method void setCodec(string $Codec) 设置返回音频格式，可取值：wav（默认），mp3，pcm
 * @method boolean getEnableSubtitle() 获取是否开启时间戳功能，默认为false。
 * @method void setEnableSubtitle(boolean $EnableSubtitle) 设置是否开启时间戳功能，默认为false。
 * @method integer getSegmentRate() 获取断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。
 * @method void setSegmentRate(integer $SegmentRate) 设置断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。
 * @method string getEmotionCategory() 获取控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)
 * @method void setEmotionCategory(string $EmotionCategory) 设置控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)
 * @method integer getEmotionIntensity() 获取控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；
 * @method void setEmotionIntensity(integer $EmotionIntensity) 设置控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；
 */
class TextToVoiceRequest extends AbstractModel
{
    /**
     * @var string 合成语音的源文本，按UTF-8编码统一计算。
中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
     */
    public $Text;

    /**
     * @var string 一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
     */
    public $SessionId;

    /**
     * @var float 音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
     */
    public $Volume;

    /**
     * @var float 语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后一位，例如0.5 1.1 1.8等。<br>
     */
    public $Speed;

    /**
     * @var integer 项目id，用户自定义，默认为0。
     */
    public $ProjectId;

    /**
     * @var integer 模型类型，1-默认模型。
     */
    public $ModelType;

    /**
     * @var integer 标准音色<li>10510000-智逍遥，阅读男声</li><li>1001-智瑜，情感女声</li><li>1002-智聆，通用女声</li><li>1003-智美，客服女声</li><li>1004-智云，通用男声</li><li>1005-智莉，通用女声</li><li>1007-智娜，客服女声</li><li>1008-智琪，客服女声</li><li>1009-智芸，知性女声</li><li>1010-智华，通用男声</li><li>1017-智蓉，情感女声</li><li>1018-智靖，情感男声</li><li>1050-WeJack，英文男声</li><li>1051-WeRose，英文女声</li>精品音色<br>精品音色拟真度更高，价格不同于标准音色，查看[购买指南](https://cloud.tencent.com/document/product/1073/34112)<br><li>100510000-智逍遥，阅读男声</li><li>101001-智瑜，情感女声</li><li>101002-智聆，通用女声</li><li>101003-智美，客服女声</li><li>101004-智云，通用男声</li><li>101005-智莉，通用女声</li><li>101006-智言，助手女声</li><li>101007-智娜，客服女声</li><li>101008-智琪，客服女声</li><li>101009-智芸，知性女声</li><li>101010-智华，通用男声</li><li>101011-智燕，新闻女声</li><li>101012-智丹，新闻女声</li><li>101013-智辉，新闻男声</li><li>101014-智宁，新闻男声</li><li>101015-智萌，男童声</li><li>101016-智甜，女童声</li><li>101017-智蓉，情感女声</li><li>101018-智靖，情感男声</li><li>101019-智彤，粤语女声</li><li>101020-智刚，新闻男声</li><li>101021-智瑞，新闻男声</li><li>101022-智虹，新闻女声</li><li>101023-智萱，聊天女声</li><li>101024-智皓，聊天男声</li><li>101025-智薇，聊天女声</li><li>101026-智希，通用女声</li><li>101027-智梅，通用女声</li><li>101028-智洁，通用女声</li><li>101029-智凯，通用男声</li><li>101030-智柯，通用男声</li><li>101031-智奎，通用男声</li><li>101032-智芳，通用女声</li><li>101033-智蓓，客服女声</li><li>101034-智莲，通用女声</li><li>101035-智依，通用女声</li><li>101040-智川，四川女声</li><li>101050-WeJack，英文男声</li><li>101051-WeRose，英文女声</li><li>101052-智味，通用男声</li>
<li>101053-智方，通用男声</li>
<li>101054-智友，通用男声</li>
<li>101055-智付，通用女声</li>
<li>101056-智林，东北男声</li>
<li>301000-爱小广，多情感通用男声</li>
<li>301001-爱小栋，多情感通用男声</li>
<li>301002-爱小海，多情感通用男声</li>
<li>301003-爱小霞，多情感通用女声</li>
<li>301004-爱小玲，多情感通用女声</li>
<li>301005-爱小章，多情感通用男声</li>
<li>301006-爱小峰，多情感通用男声</li>
<li>301007-爱小亮，多情感通用男声</li>
<li>301008-爱小博，多情感通用男声</li>
<li>301009-爱小芸，多情感通用女声</li>
<li>301010-爱小秋，多情感通用女声</li>
<li>301011-爱小芳，多情感通用女声</li>
<li>301012-爱小琴，多情感通用女声</li>
<li>301013-爱小康，多情感通用男声</li>
<li>301014-爱小辉，多情感通用男声</li>
<li>301015-爱小璐，多情感通用女声</li>
<li>301016-爱小阳，多情感通用男声</li>
<li>301017-爱小泉，多情感通用男声</li>
<li>301018-爱小昆，多情感通用男声</li>
<li>301019-爱小诚，多情感通用男声</li>
<li>301020-爱小岚，多情感通用女声</li>
<li>301021-爱小茹，多情感通用女声</li>
<li>301022-爱小蓉，多情感通用女声</li>
<li>301023-爱小燕，多情感通用女声</li>
<li>301024-爱小莲，多情感通用女声</li>
<li>301025-爱小武，多情感通用男声</li>
<li>301026-爱小雪，多情感通用女声</li>
<li>301027-爱小媛，多情感通用女声</li>
<li>301028-爱小娴，多情感通用女声</li>
<li>301029-爱小涛，多情感通用男声</li>
<li>401000-智妍，活力女声</li>
<li>401001-智萱，温暖女声</li>
<li>401002-智飞，活力男声</li>
<li>401003-智悦，活力女声</li>
<li>401004-智海，成熟男声</li>
<li>401005-智凡，新闻男声</li>
<li>401006-智航，导航女声</li>
<li>401007-智婷，广告女声</li>
<li>401008-智霞，通用女声</li>
     */
    public $VoiceType;

    /**
     * @var integer 主语言类型：<li>1-中文（默认）</li><li>2-英文</li>
     */
    public $PrimaryLanguage;

    /**
     * @var integer 音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
     */
    public $SampleRate;

    /**
     * @var string 返回音频格式，可取值：wav（默认），mp3，pcm
     */
    public $Codec;

    /**
     * @var boolean 是否开启时间戳功能，默认为false。
     */
    public $EnableSubtitle;

    /**
     * @var integer 断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。
     */
    public $SegmentRate;

    /**
     * @var string 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)
     */
    public $EmotionCategory;

    /**
     * @var integer 控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；
     */
    public $EmotionIntensity;

    /**
     * @param string $Text 合成语音的源文本，按UTF-8编码统一计算。
中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
     * @param string $SessionId 一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
     * @param float $Volume 音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
     * @param float $Speed 语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后一位，例如0.5 1.1 1.8等。<br>
     * @param integer $ProjectId 项目id，用户自定义，默认为0。
     * @param integer $ModelType 模型类型，1-默认模型。
     * @param integer $VoiceType 标准音色<li>10510000-智逍遥，阅读男声</li><li>1001-智瑜，情感女声</li><li>1002-智聆，通用女声</li><li>1003-智美，客服女声</li><li>1004-智云，通用男声</li><li>1005-智莉，通用女声</li><li>1007-智娜，客服女声</li><li>1008-智琪，客服女声</li><li>1009-智芸，知性女声</li><li>1010-智华，通用男声</li><li>1017-智蓉，情感女声</li><li>1018-智靖，情感男声</li><li>1050-WeJack，英文男声</li><li>1051-WeRose，英文女声</li>精品音色<br>精品音色拟真度更高，价格不同于标准音色，查看[购买指南](https://cloud.tencent.com/document/product/1073/34112)<br><li>100510000-智逍遥，阅读男声</li><li>101001-智瑜，情感女声</li><li>101002-智聆，通用女声</li><li>101003-智美，客服女声</li><li>101004-智云，通用男声</li><li>101005-智莉，通用女声</li><li>101006-智言，助手女声</li><li>101007-智娜，客服女声</li><li>101008-智琪，客服女声</li><li>101009-智芸，知性女声</li><li>101010-智华，通用男声</li><li>101011-智燕，新闻女声</li><li>101012-智丹，新闻女声</li><li>101013-智辉，新闻男声</li><li>101014-智宁，新闻男声</li><li>101015-智萌，男童声</li><li>101016-智甜，女童声</li><li>101017-智蓉，情感女声</li><li>101018-智靖，情感男声</li><li>101019-智彤，粤语女声</li><li>101020-智刚，新闻男声</li><li>101021-智瑞，新闻男声</li><li>101022-智虹，新闻女声</li><li>101023-智萱，聊天女声</li><li>101024-智皓，聊天男声</li><li>101025-智薇，聊天女声</li><li>101026-智希，通用女声</li><li>101027-智梅，通用女声</li><li>101028-智洁，通用女声</li><li>101029-智凯，通用男声</li><li>101030-智柯，通用男声</li><li>101031-智奎，通用男声</li><li>101032-智芳，通用女声</li><li>101033-智蓓，客服女声</li><li>101034-智莲，通用女声</li><li>101035-智依，通用女声</li><li>101040-智川，四川女声</li><li>101050-WeJack，英文男声</li><li>101051-WeRose，英文女声</li><li>101052-智味，通用男声</li>
<li>101053-智方，通用男声</li>
<li>101054-智友，通用男声</li>
<li>101055-智付，通用女声</li>
<li>101056-智林，东北男声</li>
<li>301000-爱小广，多情感通用男声</li>
<li>301001-爱小栋，多情感通用男声</li>
<li>301002-爱小海，多情感通用男声</li>
<li>301003-爱小霞，多情感通用女声</li>
<li>301004-爱小玲，多情感通用女声</li>
<li>301005-爱小章，多情感通用男声</li>
<li>301006-爱小峰，多情感通用男声</li>
<li>301007-爱小亮，多情感通用男声</li>
<li>301008-爱小博，多情感通用男声</li>
<li>301009-爱小芸，多情感通用女声</li>
<li>301010-爱小秋，多情感通用女声</li>
<li>301011-爱小芳，多情感通用女声</li>
<li>301012-爱小琴，多情感通用女声</li>
<li>301013-爱小康，多情感通用男声</li>
<li>301014-爱小辉，多情感通用男声</li>
<li>301015-爱小璐，多情感通用女声</li>
<li>301016-爱小阳，多情感通用男声</li>
<li>301017-爱小泉，多情感通用男声</li>
<li>301018-爱小昆，多情感通用男声</li>
<li>301019-爱小诚，多情感通用男声</li>
<li>301020-爱小岚，多情感通用女声</li>
<li>301021-爱小茹，多情感通用女声</li>
<li>301022-爱小蓉，多情感通用女声</li>
<li>301023-爱小燕，多情感通用女声</li>
<li>301024-爱小莲，多情感通用女声</li>
<li>301025-爱小武，多情感通用男声</li>
<li>301026-爱小雪，多情感通用女声</li>
<li>301027-爱小媛，多情感通用女声</li>
<li>301028-爱小娴，多情感通用女声</li>
<li>301029-爱小涛，多情感通用男声</li>
<li>401000-智妍，活力女声</li>
<li>401001-智萱，温暖女声</li>
<li>401002-智飞，活力男声</li>
<li>401003-智悦，活力女声</li>
<li>401004-智海，成熟男声</li>
<li>401005-智凡，新闻男声</li>
<li>401006-智航，导航女声</li>
<li>401007-智婷，广告女声</li>
<li>401008-智霞，通用女声</li>
     * @param integer $PrimaryLanguage 主语言类型：<li>1-中文（默认）</li><li>2-英文</li>
     * @param integer $SampleRate 音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
     * @param string $Codec 返回音频格式，可取值：wav（默认），mp3，pcm
     * @param boolean $EnableSubtitle 是否开启时间戳功能，默认为false。
     * @param integer $SegmentRate 断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。
     * @param string $EmotionCategory 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)
     * @param integer $EmotionIntensity 控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("PrimaryLanguage",$param) and $param["PrimaryLanguage"] !== null) {
            $this->PrimaryLanguage = $param["PrimaryLanguage"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("EnableSubtitle",$param) and $param["EnableSubtitle"] !== null) {
            $this->EnableSubtitle = $param["EnableSubtitle"];
        }

        if (array_key_exists("SegmentRate",$param) and $param["SegmentRate"] !== null) {
            $this->SegmentRate = $param["SegmentRate"];
        }

        if (array_key_exists("EmotionCategory",$param) and $param["EmotionCategory"] !== null) {
            $this->EmotionCategory = $param["EmotionCategory"];
        }

        if (array_key_exists("EmotionIntensity",$param) and $param["EmotionIntensity"] !== null) {
            $this->EmotionIntensity = $param["EmotionIntensity"];
        }
    }
}
