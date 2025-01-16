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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletions请求参数结构体
 *
 * @method string getModel() 获取模型名称，可选值包括 hunyuan-lite、hunyuan-standard、hunyuan-standard-256K、hunyuan-pro、 hunyuan-code、 hunyuan-role、 hunyuan-functioncall、 hunyuan-vision、 hunyuan-turbo、 hunyuan-turbo-latest、 hunyuan-large、 hunyuan-large-longcontext、 hunyuan-turbo-vision、 hunyuan-standard-vision。
各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。

注意：
不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
 * @method void setModel(string $Model) 设置模型名称，可选值包括 hunyuan-lite、hunyuan-standard、hunyuan-standard-256K、hunyuan-pro、 hunyuan-code、 hunyuan-role、 hunyuan-functioncall、 hunyuan-vision、 hunyuan-turbo、 hunyuan-turbo-latest、 hunyuan-large、 hunyuan-large-longcontext、 hunyuan-turbo-vision、 hunyuan-standard-vision。
各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。

注意：
不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
 * @method array getMessages() 获取聊天上下文信息。
说明：
1. 长度最多为 40，按对话时间从旧到新在数组中排列。
2. Message.Role 可选值：system、user、assistant、 tool（functioncall场景）。
其中，system 角色可选，如存在则必须位于列表的最开始。user（tool） 和 assistant 需交替出现（一问一答），以 user 提问开始，user（tool）提问结束，其中tool可以连续出现多次，且 Content 不能为空。Role 的顺序示例：[system（可选） user assistant user（tool tool ...） assistant user（tool tool ...） ...]。
3. Messages 中 Content 总长度不能超过模型输入长度上限（可参考 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 文档），超过则会截断最前面的内容，只保留尾部内容。
 * @method void setMessages(array $Messages) 设置聊天上下文信息。
说明：
1. 长度最多为 40，按对话时间从旧到新在数组中排列。
2. Message.Role 可选值：system、user、assistant、 tool（functioncall场景）。
其中，system 角色可选，如存在则必须位于列表的最开始。user（tool） 和 assistant 需交替出现（一问一答），以 user 提问开始，user（tool）提问结束，其中tool可以连续出现多次，且 Content 不能为空。Role 的顺序示例：[system（可选） user assistant user（tool tool ...） assistant user（tool tool ...） ...]。
3. Messages 中 Content 总长度不能超过模型输入长度上限（可参考 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 文档），超过则会截断最前面的内容，只保留尾部内容。
 * @method boolean getStream() 获取流式调用开关。
说明：
1. 未传值时默认为非流式调用（false）。
2. 流式调用时以 SSE 协议增量返回结果（返回值取 Choices[n].Delta 中的值，需要拼接增量数据才能获得完整结果）。
3. 非流式调用时：
调用方式与普通 HTTP 请求无异。
接口响应耗时较长，**如需更低时延建议设置为 true**。
只返回一次最终结果（返回值取 Choices[n].Message 中的值）。

注意：
通过 SDK 调用时，流式和非流式调用需用**不同的方式**获取返回值，具体参考 SDK 中的注释或示例（在各语言 SDK 代码仓库的 examples/hunyuan/v20230901/ 目录中）。
 * @method void setStream(boolean $Stream) 设置流式调用开关。
说明：
1. 未传值时默认为非流式调用（false）。
2. 流式调用时以 SSE 协议增量返回结果（返回值取 Choices[n].Delta 中的值，需要拼接增量数据才能获得完整结果）。
3. 非流式调用时：
调用方式与普通 HTTP 请求无异。
接口响应耗时较长，**如需更低时延建议设置为 true**。
只返回一次最终结果（返回值取 Choices[n].Message 中的值）。

注意：
通过 SDK 调用时，流式和非流式调用需用**不同的方式**获取返回值，具体参考 SDK 中的注释或示例（在各语言 SDK 代码仓库的 examples/hunyuan/v20230901/ 目录中）。
 * @method boolean getStreamModeration() 获取流式输出审核开关。
说明：
1. 当使用流式输出（Stream 字段值为 true）时，该字段生效。
2. 输出审核有流式和同步两种模式，**流式模式首包响应更快**。未传值时默认为流式模式（true）。
3. 如果值为 true，将对输出内容进行分段审核，审核通过的内容流式输出返回。如果出现审核不过，响应中的 FinishReason 值为 sensitive。
4. 如果值为 false，则不使用流式输出审核，需要审核完所有输出内容后再返回结果。

注意：
当选择流式输出审核时，可能会出现部分内容已输出，但中间某一段响应中的 FinishReason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。
 * @method void setStreamModeration(boolean $StreamModeration) 设置流式输出审核开关。
说明：
1. 当使用流式输出（Stream 字段值为 true）时，该字段生效。
2. 输出审核有流式和同步两种模式，**流式模式首包响应更快**。未传值时默认为流式模式（true）。
3. 如果值为 true，将对输出内容进行分段审核，审核通过的内容流式输出返回。如果出现审核不过，响应中的 FinishReason 值为 sensitive。
4. 如果值为 false，则不使用流式输出审核，需要审核完所有输出内容后再返回结果。

注意：
当选择流式输出审核时，可能会出现部分内容已输出，但中间某一段响应中的 FinishReason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。
 * @method float getTopP() 获取说明：
1. 影响输出文本的多样性。模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。
2. 取值区间为 [0.0, 1.0]。取值越大，生成文本的多样性越强。
 * @method void setTopP(float $TopP) 设置说明：
1. 影响输出文本的多样性。模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。
2. 取值区间为 [0.0, 1.0]。取值越大，生成文本的多样性越强。
 * @method float getTemperature() 获取说明：
1. 影响模型输出多样性，模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。
2. 取值区间为 [0.0, 2.0]。较高的数值会使输出更加多样化和不可预测，而较低的数值会使其更加集中和确定。
 * @method void setTemperature(float $Temperature) 设置说明：
1. 影响模型输出多样性，模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。
2. 取值区间为 [0.0, 2.0]。较高的数值会使输出更加多样化和不可预测，而较低的数值会使其更加集中和确定。
 * @method boolean getEnableEnhancement() 获取功能增强（如搜索）开关。
说明：
1. hunyuan-lite 无功能增强（如搜索）能力，该参数对 hunyuan-lite 版本不生效。
2. 未传值时默认打开开关。
3. 关闭时将直接由主模型生成回复内容，可以降低响应时延（对于流式输出时的首字时延尤为明显）。但在少数场景里，回复效果可能会下降。
4. 安全审核能力不属于功能增强范围，不受此字段影响。
 * @method void setEnableEnhancement(boolean $EnableEnhancement) 设置功能增强（如搜索）开关。
说明：
1. hunyuan-lite 无功能增强（如搜索）能力，该参数对 hunyuan-lite 版本不生效。
2. 未传值时默认打开开关。
3. 关闭时将直接由主模型生成回复内容，可以降低响应时延（对于流式输出时的首字时延尤为明显）。但在少数场景里，回复效果可能会下降。
4. 安全审核能力不属于功能增强范围，不受此字段影响。
 * @method array getTools() 获取可调用的工具列表，仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
 * @method void setTools(array $Tools) 设置可调用的工具列表，仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
 * @method string getToolChoice() 获取工具使用选项，可选值包括 none、auto、custom。
说明：
1. 仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。
3. 未设置时，默认值为auto
 * @method void setToolChoice(string $ToolChoice) 设置工具使用选项，可选值包括 none、auto、custom。
说明：
1. 仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。
3. 未设置时，默认值为auto
 * @method Tool getCustomTool() 获取强制模型调用指定的工具，当参数ToolChoice为custom时，此参数为必填
 * @method void setCustomTool(Tool $CustomTool) 设置强制模型调用指定的工具，当参数ToolChoice为custom时，此参数为必填
 * @method boolean getSearchInfo() 获取默认是false，在值为true且命中搜索时，接口会返回SearchInfo
 * @method void setSearchInfo(boolean $SearchInfo) 设置默认是false，在值为true且命中搜索时，接口会返回SearchInfo
 * @method boolean getCitation() 获取搜索引文角标开关。
说明：
1. 配合EnableEnhancement和SearchInfo参数使用。打开后，回答中命中搜索的结果会在片段后增加角标标志，对应SearchInfo列表中的链接。
2. false：开关关闭，true：开关打开。
3. 未传值时默认开关关闭（false）。
 * @method void setCitation(boolean $Citation) 设置搜索引文角标开关。
说明：
1. 配合EnableEnhancement和SearchInfo参数使用。打开后，回答中命中搜索的结果会在片段后增加角标标志，对应SearchInfo列表中的链接。
2. false：开关关闭，true：开关打开。
3. 未传值时默认开关关闭（false）。
 * @method boolean getEnableSpeedSearch() 获取是否开启极速版搜索，默认false，不开启；在开启且命中搜索时，会启用极速版搜索，流式输出首字返回更快。
 * @method void setEnableSpeedSearch(boolean $EnableSpeedSearch) 设置是否开启极速版搜索，默认false，不开启；在开启且命中搜索时，会启用极速版搜索，流式输出首字返回更快。
 * @method boolean getEnableMultimedia() 获取多媒体开关。
详细介绍请阅读 [多媒体介绍](https://cloud.tencent.com/document/product/1729/111178) 中的说明。
说明：
1. 该参数目前仅对白名单内用户生效，如您想体验该功能请 [联系我们](https://cloud.tencent.com/act/event/Online_service)。
2. 该参数仅在功能增强（如搜索）开关开启（EnableEnhancement=true）并且极速版搜索开关关闭（EnableSpeedSearch=false）时生效。
3. hunyuan-lite 无多媒体能力，该参数对 hunyuan-lite 版本不生效。
4. 未传值时默认关闭。
5. 开启并搜索到对应的多媒体信息时，会输出对应的多媒体地址，可以定制个性化的图文消息。
 * @method void setEnableMultimedia(boolean $EnableMultimedia) 设置多媒体开关。
详细介绍请阅读 [多媒体介绍](https://cloud.tencent.com/document/product/1729/111178) 中的说明。
说明：
1. 该参数目前仅对白名单内用户生效，如您想体验该功能请 [联系我们](https://cloud.tencent.com/act/event/Online_service)。
2. 该参数仅在功能增强（如搜索）开关开启（EnableEnhancement=true）并且极速版搜索开关关闭（EnableSpeedSearch=false）时生效。
3. hunyuan-lite 无多媒体能力，该参数对 hunyuan-lite 版本不生效。
4. 未传值时默认关闭。
5. 开启并搜索到对应的多媒体信息时，会输出对应的多媒体地址，可以定制个性化的图文消息。
 * @method boolean getEnableDeepSearch() 获取是否开启深度研究该问题，默认是false，在值为true且命中深度研究该问题时，会返回深度研究该问题信息。
 * @method void setEnableDeepSearch(boolean $EnableDeepSearch) 设置是否开启深度研究该问题，默认是false，在值为true且命中深度研究该问题时，会返回深度研究该问题信息。
 * @method integer getSeed() 获取说明： 1. 确保模型的输出是可复现的。 2. 取值区间为非0正整数，最大值10000。 3. 非必要不建议使用，不合理的取值会影响效果。
 * @method void setSeed(integer $Seed) 设置说明： 1. 确保模型的输出是可复现的。 2. 取值区间为非0正整数，最大值10000。 3. 非必要不建议使用，不合理的取值会影响效果。
 * @method boolean getForceSearchEnhancement() 获取强制搜索增强开关。
说明：
1. 未传值时默认关闭。
2. 开启后，将强制走AI搜索，当AI搜索结果为空时，由大模型回复兜底话术。
 * @method void setForceSearchEnhancement(boolean $ForceSearchEnhancement) 设置强制搜索增强开关。
说明：
1. 未传值时默认关闭。
2. 开启后，将强制走AI搜索，当AI搜索结果为空时，由大模型回复兜底话术。
 * @method array getStop() 获取自定义结束生成字符串

调用 OpenAI 的接口时，如果您指定了 `stop` 参数, 模型会停止在匹配到 `stop` 的内容之前。
在调用混元接口时，会停止在匹配到 `stop` 的内容之后。

**说明：**
未来我们可能会修改此行为以便和 OpenAI 保持一致。
但是目前有使用该参数的情况下，开发者需要注意该参数是否会对应用造成影响，以及未来该行为调整时带来的影响。
 * @method void setStop(array $Stop) 设置自定义结束生成字符串

调用 OpenAI 的接口时，如果您指定了 `stop` 参数, 模型会停止在匹配到 `stop` 的内容之前。
在调用混元接口时，会停止在匹配到 `stop` 的内容之后。

**说明：**
未来我们可能会修改此行为以便和 OpenAI 保持一致。
但是目前有使用该参数的情况下，开发者需要注意该参数是否会对应用造成影响，以及未来该行为调整时带来的影响。
 * @method boolean getEnableRecommendedQuestions() 获取推荐问答开关。
说明：
1. 未传值时默认关闭。
2. 开启后，在返回值的最后一个包中会增加 RecommendedQuestions 字段表示推荐问答， 最多返回3条。
 * @method void setEnableRecommendedQuestions(boolean $EnableRecommendedQuestions) 设置推荐问答开关。
说明：
1. 未传值时默认关闭。
2. 开启后，在返回值的最后一个包中会增加 RecommendedQuestions 字段表示推荐问答， 最多返回3条。
 */
class ChatCompletionsRequest extends AbstractModel
{
    /**
     * @var string 模型名称，可选值包括 hunyuan-lite、hunyuan-standard、hunyuan-standard-256K、hunyuan-pro、 hunyuan-code、 hunyuan-role、 hunyuan-functioncall、 hunyuan-vision、 hunyuan-turbo、 hunyuan-turbo-latest、 hunyuan-large、 hunyuan-large-longcontext、 hunyuan-turbo-vision、 hunyuan-standard-vision。
各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。

注意：
不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
     */
    public $Model;

    /**
     * @var array 聊天上下文信息。
说明：
1. 长度最多为 40，按对话时间从旧到新在数组中排列。
2. Message.Role 可选值：system、user、assistant、 tool（functioncall场景）。
其中，system 角色可选，如存在则必须位于列表的最开始。user（tool） 和 assistant 需交替出现（一问一答），以 user 提问开始，user（tool）提问结束，其中tool可以连续出现多次，且 Content 不能为空。Role 的顺序示例：[system（可选） user assistant user（tool tool ...） assistant user（tool tool ...） ...]。
3. Messages 中 Content 总长度不能超过模型输入长度上限（可参考 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 文档），超过则会截断最前面的内容，只保留尾部内容。
     */
    public $Messages;

    /**
     * @var boolean 流式调用开关。
说明：
1. 未传值时默认为非流式调用（false）。
2. 流式调用时以 SSE 协议增量返回结果（返回值取 Choices[n].Delta 中的值，需要拼接增量数据才能获得完整结果）。
3. 非流式调用时：
调用方式与普通 HTTP 请求无异。
接口响应耗时较长，**如需更低时延建议设置为 true**。
只返回一次最终结果（返回值取 Choices[n].Message 中的值）。

注意：
通过 SDK 调用时，流式和非流式调用需用**不同的方式**获取返回值，具体参考 SDK 中的注释或示例（在各语言 SDK 代码仓库的 examples/hunyuan/v20230901/ 目录中）。
     */
    public $Stream;

    /**
     * @var boolean 流式输出审核开关。
说明：
1. 当使用流式输出（Stream 字段值为 true）时，该字段生效。
2. 输出审核有流式和同步两种模式，**流式模式首包响应更快**。未传值时默认为流式模式（true）。
3. 如果值为 true，将对输出内容进行分段审核，审核通过的内容流式输出返回。如果出现审核不过，响应中的 FinishReason 值为 sensitive。
4. 如果值为 false，则不使用流式输出审核，需要审核完所有输出内容后再返回结果。

注意：
当选择流式输出审核时，可能会出现部分内容已输出，但中间某一段响应中的 FinishReason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。
     */
    public $StreamModeration;

    /**
     * @var float 说明：
1. 影响输出文本的多样性。模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。
2. 取值区间为 [0.0, 1.0]。取值越大，生成文本的多样性越强。
     */
    public $TopP;

    /**
     * @var float 说明：
1. 影响模型输出多样性，模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。
2. 取值区间为 [0.0, 2.0]。较高的数值会使输出更加多样化和不可预测，而较低的数值会使其更加集中和确定。
     */
    public $Temperature;

    /**
     * @var boolean 功能增强（如搜索）开关。
说明：
1. hunyuan-lite 无功能增强（如搜索）能力，该参数对 hunyuan-lite 版本不生效。
2. 未传值时默认打开开关。
3. 关闭时将直接由主模型生成回复内容，可以降低响应时延（对于流式输出时的首字时延尤为明显）。但在少数场景里，回复效果可能会下降。
4. 安全审核能力不属于功能增强范围，不受此字段影响。
     */
    public $EnableEnhancement;

    /**
     * @var array 可调用的工具列表，仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
     */
    public $Tools;

    /**
     * @var string 工具使用选项，可选值包括 none、auto、custom。
说明：
1. 仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。
3. 未设置时，默认值为auto
     */
    public $ToolChoice;

    /**
     * @var Tool 强制模型调用指定的工具，当参数ToolChoice为custom时，此参数为必填
     */
    public $CustomTool;

    /**
     * @var boolean 默认是false，在值为true且命中搜索时，接口会返回SearchInfo
     */
    public $SearchInfo;

    /**
     * @var boolean 搜索引文角标开关。
说明：
1. 配合EnableEnhancement和SearchInfo参数使用。打开后，回答中命中搜索的结果会在片段后增加角标标志，对应SearchInfo列表中的链接。
2. false：开关关闭，true：开关打开。
3. 未传值时默认开关关闭（false）。
     */
    public $Citation;

    /**
     * @var boolean 是否开启极速版搜索，默认false，不开启；在开启且命中搜索时，会启用极速版搜索，流式输出首字返回更快。
     */
    public $EnableSpeedSearch;

    /**
     * @var boolean 多媒体开关。
详细介绍请阅读 [多媒体介绍](https://cloud.tencent.com/document/product/1729/111178) 中的说明。
说明：
1. 该参数目前仅对白名单内用户生效，如您想体验该功能请 [联系我们](https://cloud.tencent.com/act/event/Online_service)。
2. 该参数仅在功能增强（如搜索）开关开启（EnableEnhancement=true）并且极速版搜索开关关闭（EnableSpeedSearch=false）时生效。
3. hunyuan-lite 无多媒体能力，该参数对 hunyuan-lite 版本不生效。
4. 未传值时默认关闭。
5. 开启并搜索到对应的多媒体信息时，会输出对应的多媒体地址，可以定制个性化的图文消息。
     */
    public $EnableMultimedia;

    /**
     * @var boolean 是否开启深度研究该问题，默认是false，在值为true且命中深度研究该问题时，会返回深度研究该问题信息。
     */
    public $EnableDeepSearch;

    /**
     * @var integer 说明： 1. 确保模型的输出是可复现的。 2. 取值区间为非0正整数，最大值10000。 3. 非必要不建议使用，不合理的取值会影响效果。
     */
    public $Seed;

    /**
     * @var boolean 强制搜索增强开关。
说明：
1. 未传值时默认关闭。
2. 开启后，将强制走AI搜索，当AI搜索结果为空时，由大模型回复兜底话术。
     */
    public $ForceSearchEnhancement;

    /**
     * @var array 自定义结束生成字符串

调用 OpenAI 的接口时，如果您指定了 `stop` 参数, 模型会停止在匹配到 `stop` 的内容之前。
在调用混元接口时，会停止在匹配到 `stop` 的内容之后。

**说明：**
未来我们可能会修改此行为以便和 OpenAI 保持一致。
但是目前有使用该参数的情况下，开发者需要注意该参数是否会对应用造成影响，以及未来该行为调整时带来的影响。
     */
    public $Stop;

    /**
     * @var boolean 推荐问答开关。
说明：
1. 未传值时默认关闭。
2. 开启后，在返回值的最后一个包中会增加 RecommendedQuestions 字段表示推荐问答， 最多返回3条。
     */
    public $EnableRecommendedQuestions;

    /**
     * @param string $Model 模型名称，可选值包括 hunyuan-lite、hunyuan-standard、hunyuan-standard-256K、hunyuan-pro、 hunyuan-code、 hunyuan-role、 hunyuan-functioncall、 hunyuan-vision、 hunyuan-turbo、 hunyuan-turbo-latest、 hunyuan-large、 hunyuan-large-longcontext、 hunyuan-turbo-vision、 hunyuan-standard-vision。
各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。

注意：
不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
     * @param array $Messages 聊天上下文信息。
说明：
1. 长度最多为 40，按对话时间从旧到新在数组中排列。
2. Message.Role 可选值：system、user、assistant、 tool（functioncall场景）。
其中，system 角色可选，如存在则必须位于列表的最开始。user（tool） 和 assistant 需交替出现（一问一答），以 user 提问开始，user（tool）提问结束，其中tool可以连续出现多次，且 Content 不能为空。Role 的顺序示例：[system（可选） user assistant user（tool tool ...） assistant user（tool tool ...） ...]。
3. Messages 中 Content 总长度不能超过模型输入长度上限（可参考 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 文档），超过则会截断最前面的内容，只保留尾部内容。
     * @param boolean $Stream 流式调用开关。
说明：
1. 未传值时默认为非流式调用（false）。
2. 流式调用时以 SSE 协议增量返回结果（返回值取 Choices[n].Delta 中的值，需要拼接增量数据才能获得完整结果）。
3. 非流式调用时：
调用方式与普通 HTTP 请求无异。
接口响应耗时较长，**如需更低时延建议设置为 true**。
只返回一次最终结果（返回值取 Choices[n].Message 中的值）。

注意：
通过 SDK 调用时，流式和非流式调用需用**不同的方式**获取返回值，具体参考 SDK 中的注释或示例（在各语言 SDK 代码仓库的 examples/hunyuan/v20230901/ 目录中）。
     * @param boolean $StreamModeration 流式输出审核开关。
说明：
1. 当使用流式输出（Stream 字段值为 true）时，该字段生效。
2. 输出审核有流式和同步两种模式，**流式模式首包响应更快**。未传值时默认为流式模式（true）。
3. 如果值为 true，将对输出内容进行分段审核，审核通过的内容流式输出返回。如果出现审核不过，响应中的 FinishReason 值为 sensitive。
4. 如果值为 false，则不使用流式输出审核，需要审核完所有输出内容后再返回结果。

注意：
当选择流式输出审核时，可能会出现部分内容已输出，但中间某一段响应中的 FinishReason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。
     * @param float $TopP 说明：
1. 影响输出文本的多样性。模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。
2. 取值区间为 [0.0, 1.0]。取值越大，生成文本的多样性越强。
     * @param float $Temperature 说明：
1. 影响模型输出多样性，模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。
2. 取值区间为 [0.0, 2.0]。较高的数值会使输出更加多样化和不可预测，而较低的数值会使其更加集中和确定。
     * @param boolean $EnableEnhancement 功能增强（如搜索）开关。
说明：
1. hunyuan-lite 无功能增强（如搜索）能力，该参数对 hunyuan-lite 版本不生效。
2. 未传值时默认打开开关。
3. 关闭时将直接由主模型生成回复内容，可以降低响应时延（对于流式输出时的首字时延尤为明显）。但在少数场景里，回复效果可能会下降。
4. 安全审核能力不属于功能增强范围，不受此字段影响。
     * @param array $Tools 可调用的工具列表，仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
     * @param string $ToolChoice 工具使用选项，可选值包括 none、auto、custom。
说明：
1. 仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。
3. 未设置时，默认值为auto
     * @param Tool $CustomTool 强制模型调用指定的工具，当参数ToolChoice为custom时，此参数为必填
     * @param boolean $SearchInfo 默认是false，在值为true且命中搜索时，接口会返回SearchInfo
     * @param boolean $Citation 搜索引文角标开关。
说明：
1. 配合EnableEnhancement和SearchInfo参数使用。打开后，回答中命中搜索的结果会在片段后增加角标标志，对应SearchInfo列表中的链接。
2. false：开关关闭，true：开关打开。
3. 未传值时默认开关关闭（false）。
     * @param boolean $EnableSpeedSearch 是否开启极速版搜索，默认false，不开启；在开启且命中搜索时，会启用极速版搜索，流式输出首字返回更快。
     * @param boolean $EnableMultimedia 多媒体开关。
详细介绍请阅读 [多媒体介绍](https://cloud.tencent.com/document/product/1729/111178) 中的说明。
说明：
1. 该参数目前仅对白名单内用户生效，如您想体验该功能请 [联系我们](https://cloud.tencent.com/act/event/Online_service)。
2. 该参数仅在功能增强（如搜索）开关开启（EnableEnhancement=true）并且极速版搜索开关关闭（EnableSpeedSearch=false）时生效。
3. hunyuan-lite 无多媒体能力，该参数对 hunyuan-lite 版本不生效。
4. 未传值时默认关闭。
5. 开启并搜索到对应的多媒体信息时，会输出对应的多媒体地址，可以定制个性化的图文消息。
     * @param boolean $EnableDeepSearch 是否开启深度研究该问题，默认是false，在值为true且命中深度研究该问题时，会返回深度研究该问题信息。
     * @param integer $Seed 说明： 1. 确保模型的输出是可复现的。 2. 取值区间为非0正整数，最大值10000。 3. 非必要不建议使用，不合理的取值会影响效果。
     * @param boolean $ForceSearchEnhancement 强制搜索增强开关。
说明：
1. 未传值时默认关闭。
2. 开启后，将强制走AI搜索，当AI搜索结果为空时，由大模型回复兜底话术。
     * @param array $Stop 自定义结束生成字符串

调用 OpenAI 的接口时，如果您指定了 `stop` 参数, 模型会停止在匹配到 `stop` 的内容之前。
在调用混元接口时，会停止在匹配到 `stop` 的内容之后。

**说明：**
未来我们可能会修改此行为以便和 OpenAI 保持一致。
但是目前有使用该参数的情况下，开发者需要注意该参数是否会对应用造成影响，以及未来该行为调整时带来的影响。
     * @param boolean $EnableRecommendedQuestions 推荐问答开关。
说明：
1. 未传值时默认关闭。
2. 开启后，在返回值的最后一个包中会增加 RecommendedQuestions 字段表示推荐问答， 最多返回3条。
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("StreamModeration",$param) and $param["StreamModeration"] !== null) {
            $this->StreamModeration = $param["StreamModeration"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("EnableEnhancement",$param) and $param["EnableEnhancement"] !== null) {
            $this->EnableEnhancement = $param["EnableEnhancement"];
        }

        if (array_key_exists("Tools",$param) and $param["Tools"] !== null) {
            $this->Tools = [];
            foreach ($param["Tools"] as $key => $value){
                $obj = new Tool();
                $obj->deserialize($value);
                array_push($this->Tools, $obj);
            }
        }

        if (array_key_exists("ToolChoice",$param) and $param["ToolChoice"] !== null) {
            $this->ToolChoice = $param["ToolChoice"];
        }

        if (array_key_exists("CustomTool",$param) and $param["CustomTool"] !== null) {
            $this->CustomTool = new Tool();
            $this->CustomTool->deserialize($param["CustomTool"]);
        }

        if (array_key_exists("SearchInfo",$param) and $param["SearchInfo"] !== null) {
            $this->SearchInfo = $param["SearchInfo"];
        }

        if (array_key_exists("Citation",$param) and $param["Citation"] !== null) {
            $this->Citation = $param["Citation"];
        }

        if (array_key_exists("EnableSpeedSearch",$param) and $param["EnableSpeedSearch"] !== null) {
            $this->EnableSpeedSearch = $param["EnableSpeedSearch"];
        }

        if (array_key_exists("EnableMultimedia",$param) and $param["EnableMultimedia"] !== null) {
            $this->EnableMultimedia = $param["EnableMultimedia"];
        }

        if (array_key_exists("EnableDeepSearch",$param) and $param["EnableDeepSearch"] !== null) {
            $this->EnableDeepSearch = $param["EnableDeepSearch"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("ForceSearchEnhancement",$param) and $param["ForceSearchEnhancement"] !== null) {
            $this->ForceSearchEnhancement = $param["ForceSearchEnhancement"];
        }

        if (array_key_exists("Stop",$param) and $param["Stop"] !== null) {
            $this->Stop = $param["Stop"];
        }

        if (array_key_exists("EnableRecommendedQuestions",$param) and $param["EnableRecommendedQuestions"] !== null) {
            $this->EnableRecommendedQuestions = $param["EnableRecommendedQuestions"];
        }
    }
}
